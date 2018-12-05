<?php

namespace App\Http\Controllers;

use App\DataTables\Agency\ParticipantListingDataTable;
use App\Models\DocumentType;
use App\Models\PetStatus;
use App\Models\TrainingStatus;
use App\Models\TrainingType;
use App\User;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\ApplicationFormRequest;
use Illuminate\Support\Facades\DB;
use App\Models\FundingSource;
use App\Models\RadioButtons;
use App\Models\RadioButtonOptions;
use App\Models\EducationStatus;
use App\Models\ApplicationFormModel;
use App\Models\RaceModel;
use App\Models\EthinicityModel;
use Illuminate\Support\Facades\Input;

class ApplicationFormController extends Controller
{

    /**
     * Create a new controller instance.
     *
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Checks for exisiting application in the database.
     * @param $application_id
     * @return bool
     */
    private function doesExist($application_id)
    {
        return (ApplicationFormModel::where('application_id', $application_id)->count() > 0) ? true : false;
    }

    /**
     * Returns funding source from the model.
     */
    private function fundingSource()
    {
        $funding_source_temp = FundingSource::where('active', 'yes')
            ->where('effective_date','>=',Carbon::now()->format('Y-m-d'))
            ->orderBy('description')
            ->get(['label', 'description'])
            ->toArray();
        $funding_source[0] = '-- Select Funding Source --';
        foreach ($funding_source_temp as $data) {
            $funding_source[$data['description']] = $data['label'];
        }
        return $funding_source;
    }

    /**
     * Returns Radio buttons from the model.
     */
    private function radioButtons()
    {
        $data = [];
        $radio_buttons = RadioButtons::where('active', 'yes')
            ->get(['label', 'id'])
            ->toArray();
        foreach ($radio_buttons as $radio_button) {
            $data[$radio_button['label']] = RadioButtonOptions::where('radio_id', '=', $radio_button['id'])
                ->orderBy('sort_key')
                ->get(['option_name'])
                ->toArray();
        }

        return $data;
    }

    /**
     * Returns Education status from model.
     */
    private function educationStatus()
    {
        $education_status_temp = EducationStatus::where('active', 'yes')
            ->orderBy('sort_key')
            ->get(['label'])
            ->toArray();
        $education_status['select'] = '-- Select Education Status --';
        foreach ($education_status_temp as $data) {
            $education_status[$data['label']] = $data['label'];
        }
        return $education_status;
    }

    /**
     * Returns Race from model.
     */
    private function race()
    {
        $race_temp = RaceModel::where('active', 'yes')
            ->orderBy('sort_key')
            ->get(['label', 'description'])
            ->toArray();
        $race[1] = '-- Select Race --';
        foreach ($race_temp as $data) {
            $race[$data['description']] = $data['label'];
        }
        return $race;
    }

    /**
     * Returns Ethinicity from model.
     */
    private function ethinicity()
    {
        $ethinicity_temp = EthinicityModel::where('active', 'yes')
            ->orderBy('sort_key')
            ->get(['label', 'description'])
            ->toArray();
        $ethinicity[1] = '-- Select Ethinicity --';
        foreach ($ethinicity_temp as $data) {
            $ethinicity[$data['description']] = $data['label'];
        }
        return $ethinicity;
    }

    private function tse()
    {
        $tse_tmp = \DB::table('tse')->get();
        $tse['select an option'] = '--select an option--';
        foreach ($tse_tmp as $data) {
            $tse[$data->tse_value] = $data->tse_value;
        }
        return $tse;
    }

    private function referredBy()
    {
        $referedby_tmp = \DB::table('referred_by')->get();
        $referred_by['select an option'] = '--select an option--';
        foreach ($referedby_tmp as $data) {
            $referred_by[$data->referral_value] = $data->referral_value;
        }
        return $referred_by;
    }

    /**
     * Creates the Application Form.
     */
    public function create()
    {
        //dd('dd');
        //$applicationId = $this->randomApplicationId();

        $formAction = ['ApplicationForm.store'];
        $submitButtonText = 'Create New Record';
        $highestGradeCompleted = array();
        $highestGradeCompleted[0] = 'select an option';
        $readOnlyAttribute = '';
        for ($i = 1; $i <= 17; $i++) {
            $highestGradeCompleted[$i] = $i;
        }

        return view('agency.applicationForm',
            compact('highestGradeCompleted', 'formAction', 'submitButtonText', 'readOnlyAttribute'))
            // ->with('funding_source', $this->fundingSource())
            ->with('radio_buttons', $this->radioButtons())
            ->with('race', $this->race())
            ->with('ethinicity', $this->ethinicity())
            ->with('tse', $this->tse())
            ->with('referred_by', $this->referredBy())
            ->with('education_status', $this->educationStatus());
    }

//    protected function randomApplicationId()
//    {
//        $year = Carbon::now()->year;
//        $randomNumber = rand(10000, 99999);
//        $applicationId = $year . $randomNumber;
//
//        return $this->checkApplicationId($applicationId);
//
//    }


    protected function newApplicationId()
    {
        $applicationIdExists = ApplicationFormModel::orderBy('application_id', 'desc')->first();
        $year = Carbon::now()->year;
        $sequenceNumber = $year . 10000;
        return isset($applicationIdExists) ? $applicationIdExists->application_id + 1 : $sequenceNumber;

    }


    public function getExistingApplicationIds()
    {
        $applicationIds = ApplicationFormModel::pluck('application_id')->toArray();


        return $applicationIds;
    }

    public function authUserOrganizationName()
    {
        $userId = auth()->user()->id;
        $org_id = User::where('id', '=', $userId)->pluck('organization_id');
        $orgName = DB::table('agencies')->where('ORGANIZATION_ID', '=', $org_id)
            ->get();

        return isset($orgName[0]) ? $orgName[0]->LWIA_CD . '-' . $orgName[0]->AGCY_NAM : "";
    }

    /**
     * Saves the Application form into the database
     * @param ApplicationFormRequest|Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ApplicationFormRequest $request)
    {

        //$this->applicationFormValidationWhenUpdate($request);

        //check if the record already exist in the database.
        if ($this->doesExist($request->get('application_id'))) {
            flash('Application Id exist!')->error();
            return redirect()->route('ApplicationForm.create');
        }

        $form_object = new ApplicationFormModel;
        $form_object->application_id = $this->newApplicationId();
        $form_object->user_id = auth()->user()->id;
        $form_object->application_date = Carbon::now();
        $form_object->enrollment_date = Carbon::now();
        $form_object->assigned_agency = $this->authUserOrganizationName();
        $form_object->current_status = 'WAITLIST';
        $form_object->last_name = $request->get('last_name');
        $form_object->first_name = $request->get('first_name');
        $form_object->ssn = $request->get('ssn');
        $form_object->funding_source = $request->get('funding_source');
        $form_object->caljobs_app = $request->get('caljobs_app');
        $form_object->birth_date = Carbon::parse($request->get('birth_date'))->format('Y-m-d');
        $form_object->age = $request->get('age');
        $form_object->gender = $request->get('gender');
        $form_object->address_residence = $request->get('address_residence');
        $form_object->city = $request->get('city');
        $form_object->state = $request->get('state');
        $form_object->zip_code = $request->get('zip_code');
        $form_object->phone_residence = $request->get('phone_residence');
        $form_object->citizen = $request->get('citizen');
        $form_object->eligible_to_work = $request->get('eligible_to_work');
        $form_object->alien_doc = $request->get('alien_doc');
        $form_object->race = $request->get('race');


        if (isset($request['ethinicity'])) {
            $form_object->ethinicity = $request['ethinicity'];
        }
        if (isset($request['unincorporated_area'])) {
            $form_object->unincorporated_area = $request['unincorporated_area'];
        }
        $form_object->email_address = $request->get('email_address');

        if (isset($request['foster_child'])) {
            $form_object->foster_child = $request['foster_child'];
        }
        if (isset($request['tanf_calworks'])) {
            $form_object->tanf_calworks = $request['tanf_calworks'];
        }
        if (isset($request['family_food_stamps'])) {
            $form_object->family_food_stamps = $request['family_food_stamps'];
        }
        if (isset($request['gr'])) {
            $form_object->gr = $request['gr'];
        }
        if (isset($request['other_needy_family'])) {
            $form_object->other_needy_family = $request['other_needy_family'];
        }
        if (isset($request['disabled'])) {
            $form_object->disabled = $request['disabled'];
        }
        if (isset($request['homeless'])) {
            $form_object->homeless = $request['homeless'];
        }
        if (isset($request['pregnant_parenting_youth'])) {
            $form_object->pregnant_parenting_youth = $request['pregnant_parenting_youth'];
        }
        if (isset($request['runaway_youth'])) {
            $form_object->runaway_youth = $request['runaway_youth'];
        }
        if (isset($request['probation'])) {
            $form_object->probation = $request['probation'];
        }
        if (isset($request['english_learner'])) {
            $form_object->english_learner = $request['english_learner'];
        }
        if (isset($request['unemployment_insurance'])) {
            $form_object->unemployment_insurance = $request['unemployment_insurance'];
        }
        if (isset($request['veteran_status'])) {
            $form_object->veteran_status = $request['veteran_status'];
        }
        if (isset($request['spouse_of_qualifying_veteran'])) {
            $form_object->spouse_of_qualifying_veteran = $request['spouse_of_qualifying_veteran'];
        }
        if (isset($request['supportive_service_needed'])) {
            $form_object->supportive_service_needed = $request['supportive_service_needed'];
        }
        if (isset($request['highest_grade_completed'])) {
            $form_object->highest_grade_completed = $request['highest_grade_completed'];
        }
        if (isset($request['referred_by'])) {
            $form_object->referred_by = $request['referred_by'];
        }
        if (isset($request['tse'])) {
            $form_object->tse = $request['tse'];
        }
        if (isset($request['education_status'])) {
            $form_object->education_status = $request['education_status'];
        }
        if (isset($request['agency'])) {
            $form_object->agency = $request['agency'];
        }
        if (isset($request['staff_id'])) {
            $form_object->staff_id = $request['staff_id'];
        }
        if (isset($request['note'])) {
            $form_object->note = $request['note'];
        }
        if (isset($request['work_permit_on_file'])) {
            $form_object->work_permit_on_file = $request['work_permit_on_file'];
        }
        if (isset($request['parent_signature_on_file'])) {
            $form_object->parent_signature_on_file = $request['parent_signature_on_file'];
        }
        if (isset($request['pdj'])) {
            $form_object->pdj = $request['pdj'];
        }
        if (isset($request['cluster'])) {
            $form_object->cluster = $request['cluster'];
        }
        if (isset($request['area_office'])) {
            $form_object->area_office = $request['area_office'];
        }
        if (isset($request['caseload_no'])) {
            $form_object->caseload_no = $request['caseload_no'];
        }
        $form_object->created_at = date('Y-m-d H:i:s');
        $form_object->updated_at = date('Y-m-d H:i:s');

        $form_object->save();

        flash('Your data has been saved!')->success();

        return redirect()->route('ApplicationForm.edit', $form_object->id);
        //return redirect()->route('ApplicationForm.create');
    }

    public static function search(Request $request)
    {
        if ($request->isMethod('post')) {

            $ssn = $request->get('ssn');
            $dob = date('Y-m-d', strtotime($request->post('dob')));
            $lname = $request->get('lname');

            $searchData = ApplicationFormModel::where('birth_date', $dob)
                ->where('last_name', $lname)
                ->whereRaw("RIGHT(ssn, 4) = ?", [$ssn])
                ->get();

        }

        return view('agency.appicationSearchList', compact('searchData'));
    }

    function searchPetStatus($petStatuses)
    {
        foreach ($petStatuses as $key => $val) {
            if ($val['status'] == 'PENDING NOT SCHEDULED' || $val['status'] == 'PENDING-IN TRAINING' ||
                $val['status'] == 'VOID'
            ) {

                return 'PENDING';

            }
        }

        return 'COMPLETED';
    }

    public function editApplication($id, $pdf = null)
    {
        $petHours = '';
        $petStatus = '';
        $application = ApplicationFormModel::find($id);
        $formAction = ['ApplicationForm.update', $application->id];
        $submitButtonText = 'Update Record';
        $readOnlyAttribute = 'readonly';
        $highestGradeCompleted = array();
        $highestGradeCompleted[0] = 'select an option';
        for ($i = 1; $i <= 17; $i++) {
            $highestGradeCompleted[$i] = $i;
        }

        $petStatuses = PetStatus::where('application_form_id', '=', $application->id)->get();

        if (isset($petStatuses) && !empty($petStatuses)) {

            $petStatus = $this->searchPetStatus($petStatuses->toArray());

            $petHours = $petStatuses->sum('hours');

        }


        if ($pdf == "STREAM_PDF") {
            view()->share([
                'application' => $application,
                'highestGradeCompleted' => $highestGradeCompleted,
                'formAction' => $formAction,
                'submitButtonText' => $submitButtonText,
                'readOnlyAttribute' => $readOnlyAttribute,
                'funding_source' => $this->fundingSource(),
                'radio_buttons' => $this->radioButtons(),
                'race' => $this->race(),
                'ethinicity' => $this->ethinicity(),
                'tse' => $this->tse(),
                'referred_by' => $this->referredBy(),
                'education_status' => $this->educationStatus(),
                'petHours' => $petHours,
                'petStatus' => $petStatus
            ]);


            $pdf = PDF::loadView('agency.applicantFormPdf');
            return $pdf->stream();
        }

        return view('agency.applicationForm',
            compact('highestGradeCompleted', 'application', 'formAction', 'submitButtonText',
                'readOnlyAttribute','petHours','petStatus'))
            ->with('funding_source', $this->fundingSource())
            ->with('radio_buttons', $this->radioButtons())
            ->with('race', $this->race())
            ->with('ethinicity', $this->ethinicity())
            ->with('tse', $this->tse())
            ->with('referred_by', $this->referredBy())
            ->with('education_status', $this->educationStatus());

    }


    public function updateApplication(ApplicationFormRequest $request, $id)
    {

        //$this->applicationFormValidationWhenUpdate($request);


        $form_object = ApplicationFormModel::find($id);

        $form_object->last_name = $request->get('last_name');
        $form_object->first_name = $request->get('first_name');
        $form_object->ssn = $request->get('ssn');
        $form_object->funding_source = $request->get('funding_source');
        $form_object->caljobs_app = $request->get('caljobs_app');
        $form_object->birth_date = Carbon::parse($request->get('birth_date'))->format('Y-m-d');
        $form_object->age = $request->get('age');
        $form_object->gender = $request->get('gender');
        $form_object->address_residence = $request->get('address_residence');
        $form_object->city = $request->get('city');
        $form_object->state = $request->get('state');
        $form_object->zip_code = $request->get('zip_code');
        $form_object->phone_residence = $request->get('phone_residence');
        $form_object->citizen = $request->get('citizen');
        $form_object->eligible_to_work = $request->get('eligible_to_work');
        $form_object->alien_doc = $request->get('alien_doc');
        $form_object->race = $request->get('race');
        if (!empty($request->get('status'))) {
            $form_object->current_status = $request->get('status');
        }


        if (isset($request['ethinicity'])) {
            $form_object->ethinicity = $request['ethinicity'];
        }
        if (isset($request['unincorporated_area'])) {
            $form_object->unincorporated_area = $request['unincorporated_area'];
        }
        $form_object->email_address = $request->get('email_address');

        if (isset($request['foster_child'])) {
            $form_object->foster_child = $request['foster_child'];
        }
        if (isset($request['tanf_calworks'])) {
            $form_object->tanf_calworks = $request['tanf_calworks'];
        }
        if (isset($request['family_food_stamps'])) {
            $form_object->family_food_stamps = $request['family_food_stamps'];
        }
        if (isset($request['gr'])) {
            $form_object->gr = $request['gr'];
        }
        if (isset($request['other_needy_family'])) {
            $form_object->other_needy_family = $request['other_needy_family'];
        }
        if (isset($request['disabled'])) {
            $form_object->disabled = $request['disabled'];
        }
        if (isset($request['homeless'])) {
            $form_object->homeless = $request['homeless'];
        }
        if (isset($request['pregnant_parenting_youth'])) {
            $form_object->pregnant_parenting_youth = $request['pregnant_parenting_youth'];
        }
        if (isset($request['runaway_youth'])) {
            $form_object->runaway_youth = $request['runaway_youth'];
        }
        if (isset($request['probation'])) {
            $form_object->probation = $request['probation'];
        }
        if (isset($request['english_learner'])) {
            $form_object->english_learner = $request['english_learner'];
        }
        if (isset($request['unemployment_insurance'])) {
            $form_object->unemployment_insurance = $request['unemployment_insurance'];
        }
        if (isset($request['veteran_status'])) {
            $form_object->veteran_status = $request['veteran_status'];
        }
        if (isset($request['spouse_of_qualifying_veteran'])) {
            $form_object->spouse_of_qualifying_veteran = $request['spouse_of_qualifying_veteran'];
        }
        if (isset($request['supportive_service_needed'])) {
            $form_object->supportive_service_needed = $request['supportive_service_needed'];
        }
        if (isset($request['highest_grade_completed'])) {
            $form_object->highest_grade_completed = $request['highest_grade_completed'];
        }
        if (isset($request['referred_by'])) {
            $form_object->referred_by = $request['referred_by'];
        }
        if (isset($request['tse'])) {
            $form_object->tse = $request['tse'];
        }
        if (isset($request['education_status'])) {
            $form_object->education_status = $request['education_status'];
        }
        if (isset($request['agency'])) {
            $form_object->agency = $request['agency'];
        }
        if (isset($request['staff_id'])) {
            $form_object->staff_id = $request['staff_id'];
        }
        if (isset($request['note'])) {
            $form_object->note = $request['note'];
        }
        if (isset($request['work_permit_on_file'])) {
            $form_object->work_permit_on_file = $request['work_permit_on_file'];
        }
        if (isset($request['parent_signature_on_file'])) {
            $form_object->parent_signature_on_file = $request['parent_signature_on_file'];
        }
        if (isset($request['pdj'])) {
            $form_object->pdj = $request['pdj'];
        }
        if (isset($request['cluster'])) {
            $form_object->cluster = $request['cluster'];
        }
        if (isset($request['area_office'])) {
            $form_object->area_office = $request['area_office'];
        }
        if (isset($request['caseload_no'])) {
            $form_object->caseload_no = $request['caseload_no'];
        }
        $form_object->created_at = date('Y-m-d H:i:s');
        $form_object->updated_at = date('Y-m-d H:i:s');

        $form_object->save();

        flash('Your data has been Updated!')->success();

        return redirect()->back();
    }


    public function agencyParticipantListing(ParticipantListingDataTable $dataTable)
    {
        $particitants = ApplicationFormModel::all();
        return view('agency.participantListing', compact('particitants'));
//        return $dataTable->render('agency.participantListing');
    }


    public function applicationFormValidationWhenUpdate($request)
    {
        if ($request['submitType'] == 'ENROLLED') {
            $request->validate([
                'last_name' => 'required',
                'first_name' => 'required',
                'ssn' => 'required',
                'phone_residence' => 'required',
                'caljobs_app' => '',
                'birth_date' => 'required|date',
                'age' => 'required',
                'funding_source' => 'required',
                'gender' => 'required',
                'address_residence' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip_code' => 'required',
                'citizen' => 'required',
                'eligible_to_work' => 'required_if:citizen,==,No',
                'alien_doc' => 'required_if:citizen,==,No',
                'race' => 'required',
                //'email_address' => 'required|email',
                'foster_child' => 'required',
                'tanf_calworks' => 'required',
                'family_food_stamps' => 'required',
                'gr' => 'required',
                'other_needy_family' => 'required',
                'disabled' => 'required',
                'homeless' => 'required',
                'pregnant_parenting_youth' => 'required',
                'runaway_youth' => 'required',
                'probation' => 'required',
                'english_learner' => 'required',
                'unemployment_insurance' => 'required',
                'veteran_status' => 'required',
                'spouse_of_qualifying_veteran' => 'required',
                'supportive_service_needed' => 'required',
                'education_status' => 'required',
                'agency' => '',
                'staff_id' => 'required',
                'education_status' => 'required|not_in:select',

                'highest_grade_completed' => 'required|not_in:select',
                // 'note' => 'required',
                'work_permit_on_file' => 'required',
                'parent_signature_on_file' => 'required',
                'pdj' => 'required_if:funding_source,==,Probation JJCPA',
                'cluster' => 'required_if:funding_source,==,Probation JJCPA',
                'area_office' => 'required_if:funding_source,==,Probation JJCPA',
                'caseload_no' => 'required_if:funding_source,==,Probation JJCPA',
                'ethinicity' => 'required',

            ]);
        } else {
            $request->validate([
                'last_name' => 'required',
                'first_name' => 'required',
                'ssn' => 'required',
                'phone_residence' => 'required'
            ]);
        }
    }


    public function dropOut($applicationId)
    {
        $dropOutApplication = ApplicationFormModel::find($applicationId);
        return view('agency.dropout', compact('dropOutApplication'));
    }

    public function saveDropOutReason(Request $request, $id)
    {
        $request->validate([
            'dropoutReason' => 'required',
            'dropOutNotes' => 'required_if:dropoutReason,Other',
        ]);
        $application = ApplicationFormModel::findOrFail($id);
        $application->dropout_reason = $request['dropoutReason'];
        $application->dropout_notes = $request['dropOutNotes'];
        $application->current_status = 'RESPONDENT_DROPOUT';
        $application->save();

        return redirect('agency/mainPage');
    }


    public function applicationAttachmentForm($applicationId)
    {
        $documentTypes = DocumentType::all();
        $attachments = DB::table('application_attachments')
            ->where('application_form_id', '=', $applicationId)
            ->get();
        return view('agency.applicationFormAttachments', compact('applicationId', 'documentTypes', 'attachments'));
    }


    public function saveUploadAttachment(Request $request)
    {

        $attachment = Input::file('applicant_document');

        if (isset($attachment)) {
            $destinationPath = public_path('/uploads');
            $fileName = $attachment->getClientOriginalName();
            $fileExtension = $attachment->getClientOriginalExtension();
            $fileMimeType = $attachment->getMimeType();
            $fileSize = $attachment->getSize();
            $attachment->move($destinationPath, $fileName);
            $destinationPath = $destinationPath . '/' . $fileName;

            $attachmentFileInfo = array();
            $attachmentFileInfo['application_form_id'] = $request['applicationId'];
            $attachmentFileInfo['document_type'] = $request['document_type'];
            $attachmentFileInfo['other_document_type'] = $request['other_document_type'];
            $attachmentFileInfo['attachment_name'] = $fileName;
            $attachmentFileInfo['attachment_type'] = $fileMimeType;
            $attachmentFileInfo['attachment_size'] = $fileSize;
            $fp = fopen($destinationPath, 'r');
            $content = fread($fp, $fileSize);
            fclose($fp);
            $attachmentFileInfo['attachment_content'] = $content;
            $attachmentFileInfo['created_by'] = auth()->user()->username;
            $attachmentFileInfo['created_at'] = date('Y-m-d');
            if (DB::table('application_attachments')->insert($attachmentFileInfo)) {
                if (file_exists($destinationPath)) {
                    //  unlink($destinationPath);
                }
            }


        }
        return redirect()->back();

    }


    public function downloadApplicantAttachment($attachmentId)
    {
        $attachment = DB::table('application_attachments')
            ->where('id', '=', $attachmentId)
            ->get();


        if (isset($attachment[0])) {

            $fileName = $attachment[0]->attachment_name;
            $fileContent = $attachment[0]->attachment_content;
            $fileSize = $attachment[0]->attachment_size;
            $fileType = $attachment[0]->attachment_type;

            //dd($file[0]);
            return response($fileContent)
                ->withHeaders([
                    'Content-Description' => 'File Transfer',
                    //'Content Type' => $fileType,
                    'Content-Disposition' => ' attachment; filename=' . $fileName,
                    'Expires' => '0',
                    'Pragma' => 'public',
                    'Content-Length' => $fileSize,
                ]);
        }
    }

    public function getEthnicity($race)
    {

        $ethnicity = DB::table('ethinicity')->where('race_group', $race)->get();

        if (count($ethnicity) == 0) {
            $ethnicity = DB::table('ethinicity')->where('race_group', 'Default')->get();
        }

        return $ethnicity;

    }

    public function deleteApplicantAttachment($attachmentId)
    {
        $deleteAttactment = DB::table('application_attachments')
            ->where('id', '=', $attachmentId)
            ->delete();


        return redirect()->back();
    }


    public function petStatus($applicationId)
    {
        $petStatus = [];
        $applicantApplication = ApplicationFormModel::findOrFail($applicationId);

        if (isset($applicantApplication) && !empty($applicantApplication)) {
            $petStatus = PetStatus::where('application_form_id', $applicantApplication->id)->get();
        }

        $trainingTypes = TrainingType::orderBy('training_type_name', 'asc')->get();
        $trainingStatuses = TrainingStatus::orderBy('training_status_name', 'asc')->get();
        $action = url('/agency/petStatus/save');
        $submitButtonText = 'Create';

        return view('agency.petStatus',
            compact('applicantApplication', 'petStatus', 'trainingTypes', 'trainingStatuses', 'action',
                'submitButtonText'));
    }

    public function addPetStatus(Request $request)
    {

        $petStatus = new PetStatus;

        $petStatus->application_form_id = $request['application_form_id'];
        $petStatus->training_type = $request['training_type'];
        $petStatus->start_date = $request['start_date'];
        $petStatus->end_date = $request['end_date'];
        $petStatus->hours = $request['hours'];
        $petStatus->status = $request['status'];
        $petStatus->save();
        if ($petStatus->save()) {
            $notification = array(
                'message' => 'PET Status Created successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Something went wrong,Please try again',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }

    public function editPetStatus($id)
    {
        $petStatus = [];
        $applicantApplication = '';
        $editPetStatus = PetStatus::findOrFail($id);

        if (isset($editPetStatus) && !empty($editPetStatus)) {
            $applicantApplication = ApplicationFormModel::findOrFail($editPetStatus->application_form_id);

        }

        if (isset($applicantApplication) && !empty($applicantApplication)) {
            $petStatus = PetStatus::where('application_form_id', $applicantApplication->id)->get();
        }

        $trainingTypes = TrainingType::orderBy('training_type_name', 'asc')->get();
        $trainingStatuses = TrainingStatus::orderBy('training_status_name', 'asc')->get();

        $action = url('/agency/petStatus/' . $editPetStatus->id . '/update');
        $submitButtonText = 'Update';

        return view('agency.petStatus',
            compact('editPetStatus', 'petStatus', 'editPetStatus', 'applicantApplication', 'action', 'trainingTypes',
                'trainingStatuses', 'submitButtonText'));
    }

    public function updatePetStatus(Request $request, $id)
    {
        $updatePetStatus = PetStatus::findOrFail($id);
        $updatePetStatus->application_form_id = $request['application_form_id'];
        $updatePetStatus->training_type = $request['training_type'];
        $updatePetStatus->start_date = $request['start_date'];
        $updatePetStatus->end_date = $request['end_date'];
        $updatePetStatus->hours = $request['hours'];
        $updatePetStatus->status = $request['status'];
        $updatePetStatus->save();

        if ($updatePetStatus->save()) {
            $notification = array(
                'message' => 'PET Status Updated successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Something went wrong,Please try again',
                'alert-type' => 'error'
            );
        }

        return redirect('/agency/' . $updatePetStatus->application_form_id . '/petStatus')->with($notification);

    }

}

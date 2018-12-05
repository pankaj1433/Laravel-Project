<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ApplicationFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        if ($this->request->get('submitType') == 'ENROLLED') {
            $rules = [
                'last_name' => 'required',
                'first_name' => 'required',
                'ssn' => 'required',
                'phone_residence' => 'required',
                'caljobs_app' => '',
                'birth_date' => 'required|date',
                'age' => 'required|integer|min:14|max:25',
                'funding_source' => 'required',
                'gender' => 'required',
                'address_residence' => 'required',
                'city' => 'required',
                'state' => 'required',
                'zip_code' => 'required|min:5',
                'citizen' => 'required',
                'eligible_to_work' => 'required_if:citizen,==,No',
                'alien_doc' => 'required_if:citizen,==,No',
                'race' => 'required',
                //'email_address' => 'required|email',
                'foster_child' => 'required',
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
                //'education_status' => 'required',
                'agency' => '',
                'staff_id' => 'required',
                'education_status' => 'required|not_in:select',

                'highest_grade_completed' => 'required|not_in:0',
                // 'note' => 'required',
                'work_permit_on_file' => 'required',
                'parent_signature_on_file' => 'required',
                'pdj' => 'required_if:funding_source,==,Probation JJCPA',
                'cluster' => 'required_if:funding_source,==,Probation JJCPA',
                'area_office' => 'required_if:funding_source,==,Probation JJCPA',
                'caseload_no' => 'required_if:funding_source,==,Probation JJCPA',
                //'ethinicity' => 'required:race|not_in:1',
            ];

            if ($this->request->get('funding_source') == 'CalWORKs') {
                $rules['tanf_calworks'] = 'required|in:Yes';
            } elseif ($this->request->get('funding_source') == 'GROW') {
                $rules['tanf_calworks'] = 'required|in:Yes';
            } elseif ($this->request->get('funding_source') == 'DPSS Foster') {
                $rules['tanf_calworks'] = 'required|in:Yes';
            } else {
                $rules['tanf_calworks'] = 'required';
            }

            if ($this->request->get('foster_child') != "Yes" && $this->request->get('tanf_calworks') != "Yes"
                && $this->request->get('gr') != "Yes" && $this->request->get('homeless') != "Yes" &&
                $this->request->get('other_needy_family') != "Yes" && $this->request->get('probation') != "Yes"
            ) {
                $rules['group_validation'] = 'required';
            }


            if ($this->request->get('education_status') == "Student H.S or less") {
                $rules['highest_grade_completed'] = 'required|integer|min:1|max:12';
            } elseif ($this->request->get('education_status') == "Student attending post H.S.") {
                $rules['highest_grade_completed'] = 'required|integer|min:1|max:17';
            } elseif ($this->request->get('education_status') == "Out-of-School, H.S dropout") {
                $rules['highest_grade_completed'] = 'required|integer|min:10|max:12';
            } elseif ($this->request->get('education_status') == "Out-of-School, H.S grad, employment difficulty"
                || $this->request->get('education_status') == "Out-of-School, H.S grad, no employment difficulty"
            ) {
                $rules['highest_grade_completed'] = 'required|integer|in:12';
            } elseif ($this->request->get('education_status') == "Alternative School") {
                $rules['highest_grade_completed'] = 'required|integer|min:2|max:11';
            }


            if ($this->request->get('age') < 18) {
                $rules['work_permit_on_file'] = 'required|in:Yes';
                $rules['parent_signature_on_file'] = 'required|in:Yes';
            }


        } else {
            $rules = [
                'last_name' => 'required',
                'first_name' => 'required',
                'ssn' => 'required',
                'phone_residence' => 'required'
            ];
        }

        return $rules;
    }


    public function messages()
    {
        $messages = [
            'tanf_calworks.required' => 'The :attribute field should be selected to YES if funding source selected to CalWORKs,GROW,DPSS Foster',
            'group_validation.required' => 'One of these characteristics must be "Yes" to participate summer youth "NCC" program.(Foster Child, TANF/CALWORKS,GR,Homeless,Probation,Other Needy Family).',
        ];

        if ($this->request->get('funding_source') == "0") {
            $messages['tanf_calworks.required'] = 'The :attribute field is required';
        }

        if ($this->request->get('age') < 18) {
            $messages['work_permit_on_file.required'] = 'Work permit must be "Yes" in order to Enroll';
            $messages['parent_signature_on_file.required'] = 'Parent signature field must be "Yes" for age <18';
        }

        if ($this->request->get('education_status') == "Student H.S or less") {

            $messages['highest_grade_completed.required'] = 'The :attribute field must be between 1 to 12';

        } elseif ($this->request->get('education_status') == "Student attending post H.S.") {

            $messages['highest_grade_completed.required'] = 'The :attribute field must be greater than 12';

        } elseif ($this->request->get('education_status') == "Out-of-School, H.S dropout") {

            $messages['highest_grade_completed.required'] = 'The :attribute field must be between 10 to 12';
        } elseif ($this->request->get('education_status') == "Out-of-School, H.S grad, employment difficulty"
            || $this->request->get('education_status') == "Out-of-School, H.S grad, no employment difficulty"
        ) {

            $messages['highest_grade_completed.required'] = 'The :attribute field must be equal to 12';

        } elseif ($this->request->get('education_status') == "Alternative School") {

            $messages['highest_grade_completed.required'] = 'The :attribute field must be between 1 to 12';

        }




        return $messages;

    }
}

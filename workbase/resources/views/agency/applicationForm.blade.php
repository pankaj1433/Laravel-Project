@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Work Base Learning</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="flash-msg">
                    @include('flash::message')
                </div>
                {{ Form::open(['route' => $formAction, 'class' => 'form applicantForm','onsubmit'=>'validateFields()']) }}
                @if(isset($application))
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <a href="{{url('agency/mainPage')}}" class="btn btn-primary pull-right">Cancel</a>
                                    <a href="{{url('agency/applicant/'.$application->id.'/attachments')}}"
                                       style="margin-right:10px" class="btn btn-primary pull-right">Attachments</a>
                                    @if($application->current_status=='ENROLLED' || $application->current_status=='PLACED')
                                        <a href="{{url('/agency/'.$application->id.'/petStatus')}}"
                                           class="btn btn-primary pull-right" style="margin-right:10px">PET Status</a>
                                    @endif
                                    @if($application->current_status=='ASSIGNED' || $application->current_status=='ENROLLED')
                                        <a href="{{url('/agency/'.$application->id.'/dropoutApplication')}}"
                                           class="btn btn-primary pull-right" style="margin-right:10px">Dropout</a>
                                        @if($application->current_status=='ASSIGNED')
                                            <button type="submit" class="btn btn-primary pull-right enroll" id="enroll"
                                                    style="margin-right:10px">Enroll
                                            </button>
                                        @endif
                                    @endif
                                    @if($application->current_status=='WAITLIST')
                                        <button type="submit" class="btn btn-primary pull-right assign" id="assign"
                                                style="margin-right:10px">Assign to Caseload
                                        </button>
                                    @endif
                                    {{ Form::submit($submitButtonText, ['class' => 'submit btn btn-primary pull-right','style'=>'margin-right:10px']) }}

                                    <a target="_blank"
                                       href="{{url('/application/'.$application->id.'/STREAM_PDF')}}"
                                       class="btn btn-primary pull-right" id="assign"
                                       style="margin-right:10px">Print Enrollment Form
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-2 form-group">
                                {{ Form::label('application_id','Application ID:') }}
                                {{ Form::text('application_id',old('application_id',isset($application)?$application->application_id:""),['class' => 'form-control','readonly'=>'true']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                {{ Form::label('application_date','Application Date:') }}
                                {{ Form::text('application_date',old('application_date',isset($application->application_date)?\Carbon\Carbon::parse($application->application_date)->format('m/d/Y'):""),['class' => 'form-control','readonly'=>'true','placeholder'=>'mm/dd/yyyy']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                {{ Form::label('enrollment_date','Enrollment Date:') }}
                                {{ Form::text('enrollment_date',old('enrollment_date',isset($application->enrollment_date)?\Carbon\Carbon::parse($application->enrollment_date)->format('m/d/Y'):""),['class' => 'form-control','readonly'=>'true','placeholder'=>'mm/dd/yyyy']) }}
                            </div>
                            <div class="col-md-4 form-group">
                                {{ Form::label('assigned_agency','Agency:') }}
                                {{ Form::text('assigned_agency',old('assigned_agency',isset($application)?$application->assigned_agency:""),['class' => 'form-control','readonly'=>'true']) }}
                            </div>
                            <div class="col-md-2 form-group">
                                {{ Form::label('current_status','Current Status:') }}
                                {{ Form::text('current_status',old('current_status',isset($application)?$application->current_status:""),['class' => 'form-control','readonly'=>'true']) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-group {{$errors->has('last_name')?'has-error':''}}">
                                {{ Form::label('last_name','Last Name:',['class'=>'control-label']) }}<i
                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                {{ Form::text('last_name',old('last_name',isset($application)?$application->last_name:""),['class' => 'form-control requiredField','onkeydown'=>"return alphaOnly(event);",$readOnlyAttribute]) }}
                            </div>
                            <div class="col-md-2 form-group {{$errors->has('first_name')?'has-error':''}}">
                                {{ Form::label('first_name','First Name:',['class'=>'control-label']) }}<i
                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                {{ Form::text('first_name',old('first_name',isset($application)?$application->first_name:""),['class' => 'form-control requiredField','onkeydown'=>"return alphaOnly(event);",$readOnlyAttribute]) }}
                            </div>
                            <div class="col-md-2 form-group {{$errors->has('ssn')?'has-error':''}}">
                                {{ Form::label('ssn','SSN#:',['class'=>'control-label']) }}<i
                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                {{ Form::text('ssn',old('ssn',isset($application)?$application->ssn:""),['class' => 'form-control requiredField ssn','placeholder'=>'999-99-9999',$readOnlyAttribute]) }}
                            </div>
                            <div class="col-md-2 form-group {{$errors->has('birth_date')?'has-error':''}}">
                                {{ Form::label('birth_date','Birth Date:',['class'=>'control-label']) }}<i
                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                {{ Form::text('birth_date',old('birth_date',isset($application->birth_date)?\Carbon\Carbon::parse($application->birth_date)->format('m/d/Y'):""),['class' => 'form-control requiredField  birth','placeholder'=>'mm/dd/yyyy',$readOnlyAttribute]) }}
                            </div>
                            <div class="col-md-1 form-group {{$errors->has('age')?'has-error':''}}">
                                {{ Form::label('age','Age:',['class'=>'control-label']) }}
                                {{ Form::text('age',old('age',isset($application)?$application->age:""),['class' => 'form-control requiredField  age','readonly']) }}
                            </div>
                            <div class="col-md-2 form-group {{$errors->has('phone_residence')?'has-error':''}}">
                                {{ Form::label('phone_residence','Phone(Residence):',['class'=>'control-label']) }}<i
                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                {{ Form::text('phone_residence',old('phone_residence',isset($application)?$application->phone_residence:""),['class' => 'form-control requiredField phone','placeholder'=>'999-999-9999']) }}
                            </div>

                        </div>
                        @if(isset($application))
                            <div class="row">
                                <div class="col-md-3 form-group {{$errors->has('address_residence')?'has-error':''}}">
                                    {{ Form::label('address_residence','Address(Residence):',['class'=>'control-label']) }}
                                    <i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::text('address_residence',old('address_residence',isset($application)?$application->address_residence:""),['class' => 'form-control ']) }}
                                </div>
                                <div class="col-md-2 form-group {{$errors->has('city')?'has-error':''}}">
                                    {{ Form::label('city','City:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::text('city',old('city',isset($application)?$application->city:""),['class' => 'form-control ']) }}
                                </div>
                                <div class="col-md-1 form-group {{$errors->has('state')?'has-error':''}}">
                                    {{ Form::label('state','State:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::text('state',old('state',isset($application->state)?$application->state:"CA"),['readonly'=>true,'class' => 'form-control ']) }}
                                </div>
                                <div class="col-md-2 form-group {{$errors->has('zip_code')?'has-error':''}}">
                                    {{ Form::label('zip_code','Zip Code:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::text('zip_code',old('zip_code',isset($application)?$application->zip_code:""),['class' => 'form-control','maxlength'=>'5']) }}
                                </div>
                                <div class="col-md-4 form-group {{$errors->has('gender')?'has-error':''}}">
                                    {{ Form::label('gender','Gender:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::radio('gender','male',old('gender',isset($application)?$application->gender:"")=="male"?true:'')}}
                                    Male
                                    {{ Form::radio('gender','female',old('gender',isset($application)?$application->gender:"")=="female"?true:'') }}
                                    Female
                                    {{ Form::radio('gender','not_identify',old('gender',isset($application)?$application->gender:"")=="not_identify"?true:'') }}
                                    Did Not Self Identify

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group {{$errors->has('citizen')?'has-error':''}}">
                                    {{ Form::label('citizen','Citizen:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::radio('citizen','Yes',old('citizen',isset($application)?$application->citizen:"")=="Yes"?true:'') }}
                                    Yes
                                    {{ Form::radio('citizen','No',old('citizen',isset($application)?$application->citizen:"")=="No"?true:'') }}
                                    No
                                </div>
                                <div class="col-md-2 form-group {{$errors->has('eligible_to_work')?'has-error':''}}">
                                    {{ Form::label('eligible_to_work','Eligible to work In U.S.:',['class'=>'control-label']) }}
                                    <br>
                                    {{ Form::radio('eligible_to_work','Yes',old('eligible_to_work',isset($application)?$application->eligible_to_work:"")=="Yes"?true:'') }}
                                    Yes
                                    {{ Form::radio('eligible_to_work','No',old('eligible_to_work',isset($application)?$application->eligible_to_work:"")=="No"?true:'') }}
                                    No
                                </div>
                                <div class="col-md-2 form-group {{$errors->has('alien_doc')?'has-error':''}}">
                                    {{ Form::label('alien_doc','Alien Doc#:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('alien_doc',old('alien_doc',isset($application)?$application->alien_doc:""),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-3 form-group {{$errors->has('race')?'has-error':''}}">
                                    {{ Form::label('race','Race:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::select('race',$race,isset($application)?$application->race:"",['class' => 'form-control  full-width']) }}
                                </div>
                                <div class="col-md-3 form-group {{$errors->has('ethinicity')?'has-error':''}}"
                                     style="" id="ethnicityDiv">
                                    {{ Form::label('ethinicity','Ethinicity:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::select('ethinicity',$ethinicity,isset($application)?$application->ethinicity:"",['class' => 'form-control  full-width ethnicitySelect']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 form-group {{$errors->has('unincorporated_area')?'has-error':''}}">
                                    {{ Form::label('unincorporated_area','Unincorporated Area:',['class'=>'control-label']) }}
                                    <i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::radio('unincorporated_area','Yes',old('unincorporated_area',isset($application)?$application->unincorporated_area:"")=="Yes"?true:'') }}
                                    Yes
                                    {{ Form::radio('unincorporated_area','No',old('unincorporated_area',isset($application)?$application->unincorporated_area:"")=="No"?true:'')}}
                                    No
                                </div>
                                <div class="col-md-4 form-group {{$errors->has('email_address')?'has-error':''}}">
                                    {{ Form::label('email_address','Email Address:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('email_address',old('email_address',isset($application)?$application->email_address:""),['class' => 'form-control ']) }}
                                </div>

                                <div class="col-md-4 form-group {{$errors->has('funding_source')?'has-error':''}}">
                                    {{ Form::label('funding_source','Funding Source:',['class'=>'control-label'])}}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::select('funding_source',$funding_source,isset($application)?$application->funding_source:"",['class' => 'form-control  full-width']) }}
                                </div>
                                <div class="col-md-2 form-group {{$errors->has('caljobs_app')?'has-error':''}}">
                                    {{ Form::label('caljobs_app','CalJOBS App#:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('caljobs_app',old('caljobs_app',isset($application)?$application->caljobs_app:""),['class' => 'form-control']) }}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                @if(isset($application))
                    <div class="panel panel-default">
                        <div class="panel-body">
                            @foreach ($radio_buttons as $radio_button=>$options)
                                @php
                                    $radio_buttons_name = str_replace(' ','_',$radio_button);
                                    $radio_buttons_name = str_replace('/','_',$radio_buttons_name);
                                    $radio_buttons_name = strtolower($radio_buttons_name);
                                @endphp
                                <div class="form-group radio-buttons {{$errors->has($radio_buttons_name)?'has-error':''}}">
                                    <div class="">
                                        {{ Form::label($radio_buttons_name, $radio_button.':',['class'=>'control-label']) }}
                                        <i
                                                class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                        @foreach ($options as $option)
                                            {{ Form::radio($radio_buttons_name,$option['option_name'],old($radio_buttons_name,isset($application)?$application->$radio_buttons_name:"")==$option['option_name']?true:"") }} {{$option['option_name']}}
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="form-group {{$errors->has('education_status')?'has-error':''}}">
                                    <div class="col-md-2">
                                        {{ Form::label('education_status','Education Status:',['class'=>'control-label']) }}
                                        <i
                                                class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    </div>
                                    <div class="col-md-4">
                                        {{ Form::select('education_status',$education_status,isset($application)?$application->education_status:'',['class' => 'form-control full-width']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group {{$errors->has('highest_grade_completed')?'has-error':''}}">
                                    {{ Form::label('highest_grade_completed','Highest Grade Completed:',['class'=>'control-label']) }}
                                    <i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::select('highest_grade_completed',$highestGradeCompleted,isset($application)?$application->highest_grade_completed:'',['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-4 form-group {{$errors->has('referred_by')?'has-error':''}}">
                                    {{ Form::label('referred_by','Referred by:',['class'=>'control-label']) }}<br>
                                    {{ Form::select('referred_by',$referred_by,old('referred_by',(isset($application) && !empty($application->referred_by))?$application->referred_by:'Not Applicable'),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-4 form-group {{$errors->has('tse')?'has-error':''}}">
                                    {{ Form::label('tse','TSE:',['class'=>'control-label']) }}<br>
                                    {{ Form::select('tse',$tse,old('tse',(isset($application) && !empty($application->tse))?$application->tse:'Not Applicable'),['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 form-group {{$errors->has('agency')?'has-error':''}}">
                                    @php
                                        $agency = isset($orgName[0])?$orgName[0]->LWIA_CD.'-'.$orgName[0]->AGCY_NAM:"";
                                    @endphp
                                    {{ Form::label('agency','Agency:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('agency',old('agency',isset($application)?$application->agency:$agency),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-3 col-md-offset-1  form-group {{$errors->has('staff_id')?'has-error':''}}">
                                    {{ Form::label('staff_id','Staff Id:',['class'=>'control-label']) }}<i
                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::text('staff_id',old('staff_id',isset($application)?$application->staff_id:""),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-4 col-md-offset-1 form-group {{$errors->has('note')?'has-error':''}}">
                                    {{ Form::label('note','Note:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('note',old('note',isset($application)?$application->note:""),['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group {{$errors->has('work_permit_on_file')?'has-error':''}}">
                                    {{ Form::label('work_permit_on_file','Work Permit On File (Required for age < 18):',['class'=>'control-label']) }}
                                    <i class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::radio('work_permit_on_file','Yes',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="Yes"?true:'') }}
                                    Yes
                                    {{ Form::radio('work_permit_on_file','No',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="No"?true:'') }}
                                    No
                                    {{ Form::radio('work_permit_on_file','Not Applicable',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="Not Applicable"?true:'') }}
                                    Not Applicable
                                </div>
                                <div class="col-md-6 form-group {{$errors->has('parent_signature_on_file')?'has-error':''}}">
                                    {{ Form::label('parent_signature_on_file','Parent Signature on File (Required for age < 18):',['class'=>'control-label']) }}
                                    <i class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                    {{ Form::radio('parent_signature_on_file','Yes',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="Yes"?true:'')  }}
                                    Yes
                                    {{ Form::radio('parent_signature_on_file','No',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="No"?true:'')  }}
                                    No
                                    {{ Form::radio('parent_signature_on_file','Not Applicable',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="Not Applicable"?true:'')  }}
                                    Not Applicable
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-3 form-group {{$errors->has('pdj')?'has-error':''}}">
                                    {{ Form::label('pdj','Probation PDJ#:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('pdj',old('pdj',isset($application)?$application->pdj:""),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-3 form-group {{$errors->has('cluster')?'has-error':''}}">
                                    {{ Form::label('cluster','Cluster:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('cluster',old('cluster',isset($application)?$application->cluster:""),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-3 form-group {{$errors->has('area_office')?'has-error':''}}">
                                    {{ Form::label('area_office','Area Office:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('area_office',old('area_office',isset($application)?$application->area_office:""),['class' => 'form-control']) }}
                                </div>
                                <div class="col-md-3 form-group {{$errors->has('caseload_no')?'has-error':''}}">
                                    {{ Form::label('caseload_no','Caseload No:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('caseload_no',old('caseload_no',isset($application)?$application->caseload_no:""),['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 form-group">
                                    {{ Form::label('pet_status','PET Status#:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('pet_status',old('pet_status',isset($petStatus)?$petStatus:""),['class' => 'form-control','readonly'=>true]) }}
                                </div>
                                <div class="col-md-3 form-group">
                                    {{ Form::label('pet','PET Hours:',['class'=>'control-label']) }}<br>
                                    {{ Form::text('pet_hours',old('pet_hours',isset($petHours)?$petHours:""),['class' => 'form-control','readonly'=>true]) }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <input type="hidden" name="status" id="currrentStatus" value="">
                <input type="hidden" name="submitType" id="submitType" value="">
                <div class="row" style="margin-bottom: 50px">
                    <div class="col-md-12">
                        {{ Form::submit($submitButtonText, ['class' => 'submit btn btn-primary']) }}
                        @if(isset($application))
                            <a target="_blank"
                               href="{{url('/application/'.$application->id.'/STREAM_PDF')}}"
                               class="btn btn-primary" id="assign"
                            >Print Enrollment Form
                            </a>
                            @if($application->current_status=='WAITLIST')
                                <button type="submit" class="btn btn-primary assign" id="assign">Assign to Caseload
                                </button>
                            @endif
                            @if($application->current_status=='ASSIGNED' || $application->current_status=='ENROLLED')
                                @if($application->current_status=='ASSIGNED')
                                    <button type="submit" class="btn btn-primary enroll" id="enroll">Enroll</button>
                                @endif
                                <a href="{{url('/agency/'.$application->id.'/dropoutApplication')}}"
                                   class="btn btn-primary" id="enroll">Dropout</a>
                            @endif
                            @if($application->current_status=='ENROLLED' || $application->current_status=='PLACED')
                                <a href="{{url('/agency/'.$application->id.'/petStatus')}}"
                                   class="btn btn-primary">PET Status</a>
                            @endif
                            <a href="{{url('agency/applicant/'.$application->id.'/attachments')}}"
                               class="btn btn-primary">Attachments</a>

                        @endif
                        <a href="{{url('agency/mainPage')}}" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.birth').datepicker({
            format: 'mm/dd/yyyy',
        }).on('hide', function(e) {
            var age = Math.floor(moment(new Date()).
                diff(moment($('.birth').val(), 'MM-DD-YYYY'), 'years', true));
            if (age == 'NAN') {
                age = '';
            }
            $('.age').val(age);
        });
        $('.birth').change(function() {
            var age = Math.floor(moment(new Date()).
                diff(moment($('.birth').val(), 'MM-DD-YYYY'), 'years', true));
            if (age == 'NAN') {
                age = '';
                age = '';
            }
            $('.age').val(age);
        });
        $('.birth').change(function() {
            var age = Math.floor(moment(new Date()).
                diff(moment($('.birth').val(), 'MM-DD-YYYY'), 'years', true));
            if (age == 'NAN') {
                age = '';
            }
            $('.age').val(age);
        });
        $('.assign').click(function() {
            var status = 'ASSIGNED';
            $('#currrentStatus').val(status);
        });
        $('.enroll').click(function() {
            $('#submitType').val('ENROLLED');
            var status = 'ENROLLED';
            $('#currrentStatus').val(status);
        });

        var applicationCreated = '{{isset($application)?1:0}}';

        if (applicationCreated == 1) {
            $('.ssn').mask('XXX-X0-0000');
        } else {
            //alert('outside');
            $('.ssn').mask('000-00-0000');
        }
        $('.phone').mask('000-000-0000');
        $('#race').change(function() {
            let ethnicityField = $('.ethnicitySelect');
            $ethnicity = $(this).val();
            ethnicityField.children('option:not(:first)').remove();
            $.ajax({
                url: '/getEthnicity/' + $ethnicity,
                type: 'get',
                dataType: 'json',
                success: function(data) {
                    $.each(data, function(key, value) {

                        if (value.description === 'Not Applicable') {
                            ethnicityField.append($('<option></option>').
                                attr('value', value.description).
                                attr('selected', 'selected').
                                text(value.label));
                        } else {
                            ethnicityField.append($('<option></option>').
                                attr('value', value.description).
                                text(value.label));
                        }

                    });
                },

            });
        });

//        function ethnicityShowOrHide($raceVal) {
//            if ($raceVal != '1') {
//                $('#ethnicityDiv').show();
//            } else {
//                $('#ethnicityDiv').hide();
//            }
//        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8);
        };

        function validateFields() {
            $('.requiredField').each(function() {
                if ($(this).val() == '') {
                    alert('Please fill  the required fields');
                    return false;
                }
                return true;
            });
        }
    </script>
@endsection

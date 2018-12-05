<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Work base learning</title>
    <style>
        * {
            box-sizing: border-box;
        }

        input {
            height: 14px;
        }
        table{
            margin: 5px;
        }

        body {
            margin: -25px;
            font-size: 12px;
            border: 5px double;
            background-color: #e0d2b8;

        }

        h1{
            margin: 25px;
        }

        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 20%;
            padding: 10px;
            position: relative;
            min-height: 1px;
        }

        .column-3 {
            float: left;
            width: 25%;
            padding: 10px;
            position: relative;
            min-height: 1px;
        }

        .column-1 {
            float: left;
            width: 33%;
            padding: 10px;
            position: relative;
            min-height: 1px;
        }

        /* Clear floats after the columns */
        .row:after, .row:before {
            content: "";
            display: table;

        }

        .row:after {
            clear: both;
        }

    </style>
</head>
<body>
<h1 style="text-align: center">Work Base Learning Enrollment Form</h1>
{{ Form::open(['class' => 'applicantForm']) }}
<div class="row">
    <div class="column">

        {{ Form::label('application_id','Application ID:') }}<br>
        {{ Form::text('application_id',old('application_id',isset($application)?$application->application_id:""),['class' => 'form-control','readonly'=>'true']) }}
    </div>
    <div class="column">
        {{ Form::label('application_date','Application Date:') }}<br>
        {{ Form::text('application_date',old('application_date',isset($application->application_date)?\Carbon\Carbon::parse($application->application_date)->format('m/d/Y'):""),['class' => 'form-control','readonly'=>'true','placeholder'=>'mm/dd/yyyy']) }}
    </div>
    <div class="column">
        {{ Form::label('enrollment_date','Enrollment Date:') }}<br>
        {{ Form::text('enrollment_date',old('enrollment_date',isset($application->enrollment_date)?\Carbon\Carbon::parse($application->enrollment_date)->format('m/d/Y'):""),['class' => 'form-control','readonly'=>'true','placeholder'=>'mm/dd/yyyy']) }}
    </div>
    <div class="column">
        {{ Form::label('assigned_agency','Agency:') }}<br>
        {{ Form::text('assigned_agency',old('assigned_agency',isset($application)?$application->assigned_agency:""),['class' => 'form-control','readonly'=>'true']) }}
    </div>

</div>
<div class="row">
    <div class="column">

        {{ Form::label('current_status','Current Status:') }}<br>
        {{ Form::text('current_status',old('current_status',isset($application)?$application->current_status:""),['class' => 'form-control','readonly'=>'true']) }}
    </div>
    <div class="column">
        {{ Form::label('last_name','Last Name:',['class'=>'control-label']) }}<br>
        {{ Form::text('last_name',old('last_name',isset($application)?$application->last_name:""),['class' => 'form-control requiredField','onkeydown'=>"return alphaOnly(event);",$readOnlyAttribute]) }}
    </div>
    <div class="column">
        {{ Form::label('first_name','First Name:',['class'=>'control-label']) }}<br>
        {{ Form::text('first_name',old('first_name',isset($application)?$application->first_name:""),['class' => 'form-control requiredField','onkeydown'=>"return alphaOnly(event);",$readOnlyAttribute]) }}
    </div>
    <div class="column">
        {{ Form::label('ssn','SSN#:',['class'=>'control-label']) }}<br>
        {{ Form::text('ssn',old('ssn',isset($application)?$application->ssn:""),['class' => 'form-control requiredField ssn','placeholder'=>'999-99-9999',$readOnlyAttribute]) }}
    </div>
</div>
<div class="row">

    <div class="column">
        {{ Form::label('birth_date','Birth Date:',['class'=>'control-label']) }}<br>
        {{ Form::text('birth_date',old('birth_date',isset($application->birth_date)?\Carbon\Carbon::parse($application->birth_date)->format('m/d/Y'):""),['class' => 'form-control requiredField  birth','placeholder'=>'mm/dd/yyyy',$readOnlyAttribute]) }}
    </div>
    <div class="column">
        {{ Form::label('age','Age:',['class'=>'control-label']) }}<br>
        {{ Form::text('age',old('age',isset($application)?$application->age:""),['class' => 'form-control requiredField  age','readonly']) }}

    </div>
    <div class="column">
        {{ Form::label('phone_residence','Phone(Residence):',['class'=>'control-label']) }}<br>
        {{ Form::text('phone_residence',old('phone_residence',isset($application)?$application->phone_residence:""),['class' => 'form-control requiredField phone','placeholder'=>'999-999-9999']) }}
    </div>
</div>
@if(isset($application))
    <div class="row">
        <div class="column">
            {{ Form::label('address_residence','Address(Residence):',['class'=>'control-label']) }}<br>
            {{ Form::text('address_residence',old('address_residence',isset($application)?$application->address_residence:""),['class' => 'form-control ']) }}
        </div>
        <div class="column">
            {{ Form::label('city','City:',['class'=>'control-label']) }}<br>
            {{ Form::text('city',old('city',isset($application)?$application->city:""),['class' => 'form-control ']) }}
        </div>
        <div class="column">
            {{ Form::label('state','State:',['class'=>'control-label']) }}<br>
            {{ Form::text('state',old('state',isset($application->state)?$application->state:"CA"),['readonly'=>true,'class' => 'form-control ']) }}
        </div>
        <div class="column">
            {{ Form::label('zip_code','Zip Code:',['class'=>'control-label']) }}<br>
            {{ Form::text('zip_code',old('zip_code',isset($application)?$application->zip_code:""),['class' => 'form-control ']) }}
        </div>
    </div>

    <div class="row">

        <div class="column-1">
            {{ Form::label('gender','Gender:',['class'=>'control-label']) }}<br>
            {{ Form::radio('gender','male',old('gender',isset($application)?$application->gender:"")=="male"?true:'')}}
            Male
            {{ Form::radio('gender','female',old('gender',isset($application)?$application->gender:"")=="female"?true:'') }}
            Female
            {{ Form::radio('gender','not_identify',old('gender',isset($application)?$application->gender:"")=="not_identify"?true:'') }}
            Did Not Self Identify
        </div>
        <div class="column-3">
            {{ Form::label('citizen','Citizen:',['class'=>'control-label']) }}<br>
            {{ Form::radio('citizen','Yes',old('citizen',isset($application)?$application->citizen:"")=="Yes"?true:'') }}
            Yes
            {{ Form::radio('citizen','No',old('citizen',isset($application)?$application->citizen:"")=="No"?true:'') }}
            No
        </div>
        <div class="column-3">
            {{ Form::label('eligible_to_work','Eligible to work In U.S.:',['class'=>'control-label']) }}<br>

            {{ Form::radio('eligible_to_work','Yes',old('eligible_to_work',isset($application)?$application->eligible_to_work:"")=="Yes"?true:'') }}
            Yes
            {{ Form::radio('eligible_to_work','No',old('eligible_to_work',isset($application)?$application->eligible_to_work:"")=="No"?true:'') }}
            No
        </div>
    </div>

    <div class="row">

        <div class="column">
            {{ Form::label('alien_doc','Alien Doc#:',['class'=>'control-label']) }}<br>
            {{ Form::text('alien_doc',old('alien_doc',isset($application)?$application->alien_doc:""),['class' => 'form-control']) }}

        </div>
        <div class="column">
            {{ Form::label('race','Race:',['class'=>'control-label']) }}<br>
            {{ Form::select('race',$race,isset($application)?$application->race:"",['class' => 'form-control  full-width']) }}
        </div>
        <div class="column">
            {{ Form::label('ethinicity','Ethinicity:',['class'=>'control-label']) }}<br>
            {{ Form::select('ethinicity',$ethinicity,isset($application)?$application->ethinicity:"",['class' => 'form-control  full-width ethnicitySelect']) }}

        </div>
        <div class="column">
            {{ Form::label('unincorporated_area','Unincorporated Area:',['class'=>'control-label']) }}<br>

            {{ Form::radio('unincorporated_area','Yes',old('unincorporated_area',isset($application)?$application->unincorporated_area:"")=="Yes"?true:'') }}
            Yes
            {{ Form::radio('unincorporated_area','No',old('unincorporated_area',isset($application)?$application->unincorporated_area:"")=="No"?true:'')}}
            No
        </div>
    </div>

    <div class="row">
        <div class="column">
            {{ Form::label('email_address','Email Address:',['class'=>'control-label']) }}<br>
            {{ Form::text('email_address',old('email_address',isset($application)?$application->email_address:""),['class' => 'form-control ']) }}
        </div>
        <div class="column">
            {{ Form::label('funding_source','Funding Source:',['class'=>'control-label'])}}<br>
            {{ Form::select('funding_source',$funding_source,isset($application)?$application->funding_source:"",['class' => 'form-control  full-width']) }}
        </div>
        <div class="column">
            {{ Form::label('caljobs_app','CalJOBS App#:',['class'=>'control-label']) }}<br>
            {{ Form::text('caljobs_app',old('caljobs_app',isset($application)?$application->caljobs_app:""),['class' => 'form-control']) }}
        </div>
    </div>

    <table width="100%" cellspacing="0" cellpadding="5">
        @foreach ($radio_buttons as $radio_button=>$options)
            @php
                $radio_buttons_name = str_replace(' ','_',$radio_button);
                $radio_buttons_name = str_replace('/','_',$radio_buttons_name);
                $radio_buttons_name = strtolower($radio_buttons_name);
            @endphp
            <tr>
                <td width="30%">
                    {{ Form::label($radio_buttons_name, $radio_button.':',['class'=>'control-label']) }}
                </td>
                <td width="70%">
                    @foreach ($options as $option)
                        {{ Form::radio($radio_buttons_name,$option['option_name'],old($radio_buttons_name,isset($application)?$application->$radio_buttons_name:"")==$option['option_name']?true:"") }} {{$option['option_name']}}
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="column">
            {{ Form::label('education_status','Education Status:',['class'=>'control-label']) }}<br>
            {{ Form::select('education_status',$education_status,isset($application)?$application->education_status:'',['class' => 'form-control full-width']) }}
        </div>
        <div class="column">
            {{ Form::label('highest_grade_completed','Highest Grade Completed:',['class'=>'control-label']) }}<br>
            {{ Form::select('highest_grade_completed',$highestGradeCompleted,isset($application)?$application->highest_grade_completed:'',['class' => 'form-control']) }}
        </div>
        <div class="column">
            {{ Form::label('referred_by','Referred by:',['class'=>'control-label']) }}<br>
            {{ Form::select('referred_by',$referred_by,old('referred_by',(isset($application) && !empty($application->referred_by))?$application->referred_by:'Not Applicable'),['class' => 'form-control']) }}
        </div>
        <div class="column">
            {{ Form::label('tse','TSE:',['class'=>'control-label']) }}<br>
            {{ Form::select('tse',$tse,old('tse',(isset($application) && !empty($application->tse))?$application->tse:'Not Applicable'),['class' => 'form-control']) }}
        </div>
    </div>

    <div class="row">
        <div class="column">
            @php
                $agency = isset($orgName[0])?$orgName[0]->LWIA_CD.'-'.$orgName[0]->AGCY_NAM:"";
            @endphp
            {{ Form::label('agency','Agency:',['class'=>'control-label']) }}<br>
            {{ Form::text('agency',old('agency',isset($application)?$application->agency:$agency),['class' => 'form-control']) }}

        </div>
        <div class="column">
            {{ Form::label('staff_id','Staff Id:',['class'=>'control-label']) }}<br>
            {{ Form::text('staff_id',old('staff_id',isset($application)?$application->staff_id:""),['class' => 'form-control']) }}
        </div>
        <div class="column-1">
            {{ Form::label('note','Note:',['class'=>'control-label']) }}<br>
            {{ Form::text('note',old('note',isset($application)?$application->note:""),['class' => 'form-control']) }}
        </div>

    </div>
    <div class="row">
        <div class="column-1">
            {{ Form::label('work_permit_on_file','Work Permit On File (Required for age < 18):',['class'=>'control-label']) }}
            <br>
            {{ Form::radio('work_permit_on_file','Yes',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="Yes"?true:'') }}
            Yes
            {{ Form::radio('work_permit_on_file','No',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="No"?true:'') }}
            No
            {{ Form::radio('work_permit_on_file','Not Applicable',old('work_permit_on_file',isset($application)?$application->work_permit_on_file:"")=="Not Applicable"?true:'') }}
            Not Applicable
        </div>
        <div class="column-1">
            {{ Form::label('parent_signature_on_file','Parent Signature on File (Required for age < 18):',['class'=>'control-label']) }}
            <br>

            {{ Form::radio('parent_signature_on_file','Yes',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="Yes"?true:'')  }}
            Yes
            {{ Form::radio('parent_signature_on_file','No',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="No"?true:'')  }}
            No
            {{ Form::radio('parent_signature_on_file','Not Applicable',old('parent_signature_on_file',isset($application)?$application->parent_signature_on_file:"")=="Not Applicable"?true:'')  }}
            Not Applicable
        </div>
    </div>

    <div class="row">
        <div class="column">
            {{ Form::label('pdj','Probation PDJ#:',['class'=>'control-label']) }}<br>
            {{ Form::text('pdj',old('pdj',isset($application)?$application->pdj:""),['class' => 'form-control']) }}

        </div>
        <div class="column">
            {{ Form::label('cluster','Cluster:',['class'=>'control-label']) }}<br>
            {{ Form::text('cluster',old('cluster',isset($application)?$application->cluster:""),['class' => 'form-control']) }}
        </div>
        <div class="column">
            {{ Form::label('area_office','Area Office:',['class'=>'control-label']) }}<br>
            {{ Form::text('area_office',old('area_office',isset($application)?$application->area_office:""),['class' => 'form-control']) }}
        </div>
        <div class="column">
            {{ Form::label('caseload_no','Caseload No:',['class'=>'control-label']) }}<br>
            {{ Form::text('caseload_no',old('caseload_no',isset($application)?$application->caseload_no:""),['class' => 'form-control']) }}
        </div>
    </div>
@endif
</body>
</html>



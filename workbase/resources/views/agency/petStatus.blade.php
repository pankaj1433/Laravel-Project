@extends('layouts.app')
@section('content')
    <div class="container-fluid pet-status">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border-radius: 0">
                    <div class="panel-heading">Applicant Info</div>
                    <div class="panel-body">
                        <div class="row applicant_info">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label style="min-width: 120px">Application ID</label>&nbsp;
                                    <label style="font-weight: 400">{{isset($applicantApplication)?$applicantApplication->application_id:""}}</label>
                                </div>
                                <div class="form-group">
                                    <label style="min-width: 120px">Application Name</label>&nbsp;
                                    <label style="font-weight: 400">{{isset($applicantApplication)?$applicantApplication->first_name:""}}
                                        - {{isset($applicantApplication)?$applicantApplication->last_name:""}}</label>
                                </div>

                                <div class="form-group">
                                    <label style="min-width: 120px">Agency</label>
                                    <label style="font-weight: 400">{{isset($applicantApplication)?$applicantApplication->assigned_agency:""}}</label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default" style="border-radius: 0">
                    <div class="panel-heading">Training History</div>
                    <div class="panel-body">
                        <div class="row training_history">
                            <div class="col-md-12">
                                <table style="width:70%" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Training Type</th>
                                        <th>Training Start Date</th>
                                        <th>Training Completion Date</th>
                                        <th>Hours</th>
                                        <th>Completion Status</th>
                                        <th>Update</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($petStatus)==0)
                                        <tr>
                                            <td colspan="6" align="center">No Records Found</td>
                                        </tr>
                                    @endif
                                    @foreach($petStatus as $status)
                                        <tr>
                                            <td>{{$status->training_type}}</td>
                                            <td>{{\Carbon\Carbon::parse($status->start_date)->format('m-d-Y')}}</td>
                                            <td>{{\Carbon\Carbon::parse($status->end_date)->format('m-d-Y')}}</td>
                                            <td>{{$status->hours}}</td>
                                            <td>{{$status->status}}</td>
                                            <td><a href="{{url('/agency/petStatus/'.$status->id.'/edit')}}">Update</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <a href="{{url('application/'.$applicantApplication->id.'/edit')}}" class="btn btn-primary pull-right">Back to Enrollment Form</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default training_status" style="border-radius: 0">
                    <div class="panel-heading">Training Status</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{$action}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Training
                                            Type:</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="training_type">
                                                <option value="">Select Training Type:</option>
                                                @foreach($trainingTypes as $trainingType)
                                                    <option value="{{$trainingType->training_type_name}}"
                                                            @if(old('training_type',isset($editPetStatus)?$editPetStatus->training_type:"")==$trainingType->training_type_name) selected="selected" @endif>{{$trainingType->training_type_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="hidden" name="application_form_id"
                                                   value="{{$applicantApplication->id}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="col-md-2 pull-right">
                                        <div class="form-group">
                                            <button type="submit"
                                                    class="btn btn-primary pull-right">{{$submitButtonText}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Start date:</label>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" name="start_date"
                                                   value="{{old('start_date',isset($editPetStatus)?$editPetStatus->start_date:"")}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">End date:</label>
                                        <div class="col-md-4">
                                            <input type="date" class="form-control" name="end_date"
                                                   value="{{old('end_date',isset($editPetStatus)?$editPetStatus->end_date:"")}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Hours:</label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="hours"
                                                   value="{{old('hours',isset($editPetStatus)?$editPetStatus->hours:"")}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status:</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="status">
                                                <option value="">Select Training Status</option>
                                                @foreach($trainingStatuses as $trainingStatus)
                                                    <option value="{{$trainingStatus->training_status_name}}"
                                                            @if(old('status',isset($editPetStatus)?$editPetStatus->status:"")=="$trainingStatus->training_status_name") selected="selected" @endif>{{$trainingStatus->training_status_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

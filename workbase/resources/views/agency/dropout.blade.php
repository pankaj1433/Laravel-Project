@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dropout Reason</div>
                    <form method="post" action="{{url('/agency/'.$dropOutApplication->id.'/saveDropoutReason')}}">
                        {{csrf_field()}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Application ID:&nbsp;&nbsp;&nbsp;</label>{{$dropOutApplication->application_id}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Application Name:&nbsp;</label>{{$dropOutApplication->last_name}}&nbsp;&nbsp;&nbsp;{{$dropOutApplication->first_name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label>Please select the reason for dropout</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
				<div class="form-group {{$errors->has('dropoutReason')?'has-error':''}}">
                                <label class="control-label">Dropout Reasons:</label><br>
                                <label class="radio-inline">
                                        <input type="radio" name="dropoutReason" value="Per Youth's Request">Per Youth's Request
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="dropoutReason" value="Did not Provide Required Documentation">Did not Provide Required Documentation
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="dropoutReason" value="Not Eligible for Program">Not Eligible for Program
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="dropoutReason" value="Other">Other
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="dropoutReason" value="Intake Error">Intake Error
                                </label><br>
				@if($errors->has('dropoutReason'))
					<span class="help-block">{{$errors->first('dropoutReason')}}</span>
				@endif
				</div>
                            </div>
                            <div class="col-md-4">	
                               <div class="form-group {{$errors->has('dropOutNotes')?'has-error':''}}">
 				    <label class="control-label">Notes:</label>
                                    <textarea class="form-control" name="dropOutNotes"></textarea>
				  @if($errors->has('dropOutNotes'))
					<span class="help-block">{{$errors->first('dropOutNotes')}}</span>
				 @endif
                                </div>
                           </div>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Dropout</button>
                        <a href="{{url('/agency/mainPage')}}" class="btn btn-primary">Cancel</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


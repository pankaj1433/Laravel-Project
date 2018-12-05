@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Timesheet</div>
            {{ Form::open() }}
            {{-- {{ Form::text('Application_Name',$responsibility['Application_Name'],['class' => 'form-control']) }} --}}
                <div class="panel-body">
                <div class="col-md-12">
                    <table class="timesheet-top table table-bordered">
                        <tr>
                            <td>
                                <span>Last Name</span>
                                {{ Form::text('last_name',null,['class' => 'form-control']) }}
                            </td>
                            <td>
                                <span>First Name</span>
                                {{ Form::text('first_name',null,['class' => 'form-control']) }}
                            </td>
                            <td>
                                <span>Pay Period</span>
                                <div class="date-row">
                                    <div>
                                        <span>From:</span>
                                        {{ Form::date('from_date',null,['class' => 'form-control']) }}
                                    </div>
                                    <div>
                                        <span>To:</span>
                                        {{ Form::date('to_date',null,['class' => 'form-control']) }}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Job Titile</span>
                                {{ Form::text('jon',null,['class' => 'form-control']) }}
                            </td>
                            <td>
                                <span>Agency Name</span>
                                {{ Form::text('first_name',null,['class' => 'form-control']) }}
                            </td>
                            <td>
                                <span>Worksite Name and Address</span>
                                {{ Form::text('last_name',null,['class' => 'form-control']) }}
                            </td>
                        </tr>
                    </table>

                    <table class="margin-top  table table-bordered">
                        <thead>
                            <tr>
                                <td rowspan="2">Date</td>
                                <td rowspan="2">From</td>
                                <td rowspan="2">To</td>
                                <td colspan="2">Lunch</td>
                                <td rowspan="2"># of sick Leave</td>
                                <td rowspan="2">Total Hours</td>
                            </tr>
                            <tr>
                                <td>From</td>
                                <td>To</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="last-row">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Total Hours</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="timesheet-bottom row">
                        <div class="col-md-4">
                            <span>total reg hrs worked</span>
                            {{ Form::text('hrs_worked',null,['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-4">
                            <span>total sick hrs used</span>
                            {{ Form::text('sick_hrs',null,['class' => 'form-control']) }}
                        </div>
                        <div class="col-md-4">
                            <span>total hours</span>
                            {{ Form::text('total_hrs',null,['class' => 'form-control']) }}
                        </div>
                    </div>
                    <div class="margin-top row">
                        <div class="col-md-8">
                            {{ Form::checkbox('submit',false,['class' => 'form-control','checked'=>'false']) }}
                            <span>I certify that all the information on this report is true and correct.</span>
                        </div>
                        <div class="col-md-2 col-xs-offset-2">
                            {{ Form::Submit('submit',null,['class' => 'form-control']) }}
                        </div>
                    </div>
                </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection

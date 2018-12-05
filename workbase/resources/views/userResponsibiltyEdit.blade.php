@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">User Responsibility</div>

                {{ Form::open(['route' => 'userResponsibility.update', 'class' => 'form']) }}
                {{ Form::hidden('id',$responsibility['id']) }}
                <div class="panel-body">
                        <div class="flash-msg">
                                @include('flash::message')
                        </div>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tr> 
                                <th>Application Name</th>
                                <td>{{ Form::text('Application_Name',$responsibility['Application_Name'],['class' => 'form-control']) }}</td>
                            </tr>
                            <tr> 
                                <th>User Name</th>
                                <td>{{ Form::text('User_Name',$responsibility['User_Name'],['class' => 'form-control']) }}</td>
                            </tr>
                            <tr> 
                                <th>Full Name</th>
                                <td>{{ Form::text('Full_Name',$responsibility['Full_Name'],['class' => 'form-control']) }}</td>
                            </tr>
                            <tr> 
                                <th>Responsibility</th>
                                <td>{{ Form::text('Responsibility',$responsibility['Responsibility'],['class' => 'form-control']) }}</td>
                            </tr>
                            <tr> 
                                <th>Start_Date</th>
                                <td>{{ Form::date('Start_Date',$responsibility['Start_Date'],['class' => 'form-control']) }}</td>
                            </tr>
                            <tr> 
                                <th>End_Date</th>
                                <td>{{ Form::date('End_Date',$responsibility['End_Date'],['class' => 'form-control']) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="pull-right">
                        {{ Form::submit('Update User Responsibility', ['class' => 'btn btn-info']) }}
                        <a class='btn btn-info' href="{{ route('userResponsibility.show') }}">Cancel</a>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@endsection

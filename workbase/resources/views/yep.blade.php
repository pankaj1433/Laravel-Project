@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Css Application Administrator</div>
                <div class="panel-body">
                    <ul>
                        <li>Administration
                            <ul>
                                <li><a href="{{url('/agencyUser/create')}}">Create Agency User</a></li>
                                <li><a href="{{url('/agencyUser/roles')}}">Assign Agency User Responsibility</a></li>
                                <li><a href="dusercreate">Create Department User</a></li>
                                <li><a href="duserassign">Assign Department User Responsibility</a></li>
                                <li><a href="dpss">Search Applicant - DPSS Data Source - 2018</a></li>
                                <li><a href="appinfo">Search Applicant( as administrator for update )</a></li>
                                <li><a href="naics">NAICS Reference</a></li>
                            </ul>
                        </li>
                        <li>Reports
                                <ul>
                                    <li><a href="appsummary">Application Summary</a></li>
                                    <li><a href="appagency">Application by Funding Source</a></li>
                                </ul>
                        </li>
                        <li>
                            Agency
                            <ul>
                                <li><a href="appinfo">Search Applicant</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

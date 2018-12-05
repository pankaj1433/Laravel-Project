@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Agency</div>
                    <div class="panel-body">
                        @if(Laratrust::hasRole('AGENCY_ADMIN'))
                            <ul>
                                <li>Agency Admin
                                    <ul>

                                        <li>
                                            <a href="{{url('/agencyUser/create')}}">Create Agency User</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/agencyUser/roles')}}">Edit Agency User Responsibility</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/agency/participantListing')}}">Participant listing</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/worksite/create')}}">Worksite</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        @endif
                        @if(Laratrust::hasRole('AGENCY_USER'))
                            <ul>
                                <li>Agency User
                                    <ul>
                                        <li>
                                            <a href="{{url('/appinfo')}}">Create Application</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/agency/participantListing')}}">Participant listing</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/worksite/create')}}">Worksite</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Participant Listing

                    </div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-12">
                               <table class="table table-bordered">
                                   <thead>
                                    <tr>
                                        <th>Application No</th>
                                        <th>Current Status</th>
                                        <th>View</th>
                                        <th>Name</th>
                                        <th>Foster Child</th>
                                        <th>Funding Source</th>
                                        <th>Eligibility Status</th>
                                        <th>Enrollment Status</th>
                                        <th>PET Status</th>
                                        <th>PET Hours</th>
                                        <th>Staff Id</th>
                                        <th>Staff Note</th>
                                        <th>Current Job Location</th>
                                        <th>Placement Exit</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($particitants as $particitant)
                                            <tr>
                                                <td>{{$particitant->application_id}}</td>
                                                <td>{{$particitant->current_status}}</td>
                                                <td><a href="{{url('/application/'.$particitant->id.'/edit')}}">View</a></td>
                                                <td>{{$particitant->last_name}}&nbsp;{{$particitant->first_name}}</td>
                                                <td>{{$particitant->foster_child}}</td>
                                                <td>{{empty($particitant->funding_source)?'':$particitant->funding_source}}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                   </tbody>
                               </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

    </script>
@endsection

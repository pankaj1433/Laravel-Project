@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Current User Assignments</div>
                <div class="panel-body">
                    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>User Id</th>
                <th>User Name</th>
                <th>Full Name</th>
                <th>User Type</th>
                <th>Org Code</th>
                <th>Resp Key</th>
                <th>Resp Desc</th>
                <th>Assign</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20142285</td>
                <td>GREENFIELD</td>
                <td>STARR</td>
                <td>AGENCY</td>
                <td>verYC10</td>
                <td>AGENCY_USER</td>
                <td>AGENCY USER</td>
                <td>ASSIGN</td>
                <td>05/06/2014</td>
                <td>05/06/2014</td>
                <td>
                    <a href="#" title="Edit User"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            
        </tbody>
        
    </table></div>
                </div></div></div></div>
</div>
@endsection

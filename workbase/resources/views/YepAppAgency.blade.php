@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Applicants By Agencies - Fiscal Year 2018</div>
                <div class="panel-body">
                    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>SSN</th>
                <th>Funding Source</th>
                <th>Current Status</th>
                <th>Job Details</th>
                <th>Application Date</th>
                <th>Assigned Date</th>
                <th>Enrollment Date </th>
                <th>Placement Date</th>
                <th>Exit Date</th>
                <th>DOB</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Aguirre Brandol</td>
                <td>****17125</td>
                <td>CalWorks</td>
                <td>Enrolled</td>
                <td>-</td>
                <td>08/02/2017</td>
                <td>08/02/2017</td>
                <td>08/02/2017</td>
                <td>08/02/2017</td>
                <td>08/02/2017</td>
                <td>08/02/2017</td>
                <td><a href="#" title="View Details"><i class="fas fa-eye"></i></a></td>
                
            </tr>
            
        </tbody>
        
    </table></div>
                    
                </div></div></div></div>
</div>
@endsection

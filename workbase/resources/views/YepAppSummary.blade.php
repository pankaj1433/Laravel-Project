@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Applicants Summary By Agencies - Fiscal Year 2018</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <h4>LWIA: FET</h4>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Agency</th>
                <th>No of Applicants</th>
                <th>View Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Employment & Training</td>
                <td>50</td>
                <td><a href="#" title="View Details"><i class="fas fa-eye"></i></a></td>
                
            </tr>
            
        </tbody>
        
    </table></div>
                    <div class="table-responsive">
                        <h4>LWIA: LAI</h4>
    <table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Agency</th>
                <th>No of Applicants</th>
                <th>View Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Employment & Training</td>
                <td>50</td>
                <td><a href="#" title="View Details"><i class="fas fa-eye"></i></a></td>
                
            </tr>
            
        </tbody>
        
    </table></div>
                </div></div></div></div>
</div>
@endsection

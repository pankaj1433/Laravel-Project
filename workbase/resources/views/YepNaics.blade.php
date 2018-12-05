@extends('layouts.app')

@section('content')
<div class="container">
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">NAICS reference</div>
                <div class="panel-body">
                    <div class="table-responsive">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Sector Code</th>
                <th>Sector</th>
                <th>Sub Sector Code</th>
                <th>Sub Sector</th>
                <th>Sub Sector Desc</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1111110</td>
                <td>Soyabeen Farming</td>
                <td>11</td>
                <td>Agriculture</td>
                <td>111</td>
                <td>Corp production</td>
                <td>Production</td>
                
            </tr>
            
        </tbody>
        
    </table></div>
                </div></div></div></div>
</div>
@endsection

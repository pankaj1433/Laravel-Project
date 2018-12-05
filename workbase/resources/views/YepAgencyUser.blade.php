@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading" id="panelHeading">Create Agency User</div>
                <div class="panel-body">
                    <form id="dpss-data" method="POST" name="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Username:</label>
                                    <input required name="username" id="username" type="text" class="form-control form-control-lg" placeholder="username"/>
                                </div> </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="lname" id="lname" type="text" class="form-control form-control-lg" placeholder="Last Name"/>
                                </div></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input required name="fname" id="fname" type="text" class="form-control form-control-lg" placeholder="First Name"/>
                                </div> </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Middle Initial</label>
                                    <input required name="minitial" id="minitial" type="text" class="form-control form-control-lg" placeholder="Middle Initial"/>
                                </div> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Client Email</label>
                                    <input required name="email" id="email" type="email" class="form-control form-control-lg" placeholder="Contact Email"/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Client Phone Number 1</label>
                                    <input name="phone1" id="phone1" type="text" class="form-control form-control-lg" placeholder="Client Phone Number 1"/>
                                </div></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Client Phone Number 2</label>
                                    <input required name="phone2" id="phone2" type="text" class="form-control form-control-lg" placeholder="Client Phone Number 2"/>
                                </div> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address Line 1</label>
                                    <input required name="address1" id="address1" type="text" class="form-control form-control-lg" placeholder="Address Line 1"/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address Line 2</label>
                                    <input required name="address2" id="address2" type="text" class="form-control form-control-lg" placeholder="Address Line 2"/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address Line 3</label>
                                    <input required name="address3" id="address3" type="text" class="form-control form-control-lg" placeholder="Address Line 3"/>
                                </div> </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input required name="city" id="city" type="text" class="form-control form-control-lg" placeholder="City"/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <input required name="state" id="state" type="text" class="form-control form-control-lg" placeholder="State"/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Zipcode</label>
                                    <input required name="zipcode" id="zipcode" type="text" class="form-control form-control-lg" placeholder="Zipcode"/>
                                </div> </div>
                        </div>
                            <input type="hidden" name="user_type" value="AGENCY_USER">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Current User</div>
                <div class="panel-body">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>User Type</th>
                <th>Org Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SGREENFIELD</td>
                <td>GREENFIELD</td>
                <td>STARR</td>
                <td>AGENCY</td>
                <td>verYC10</td>
                <td>
                    <a href="#" title="Edit User"><i class="fas fa-edit"></i></a>
                    <a href="#" title="Reset Password"><i class="fas fa-key"></i></a>
                </td>
            </tr>
            
        </tbody>
        
    </table>
                </div></div></div></div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">DPSS Data Search</div>
                <div class="panel-body">
                    <form id="dpss-data" method="POST" name="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>SSN No.</label>
                                    <input required name="ssn" id="ssn" type="text" class="form-control form-control-lg" placeholder=""/>
                                </div> </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input name="dob" id="dob" type="date" class="form-control form-control-lg" placeholder="Date of Birth"/>
                                </div></div>
                            <div class="col-md-4">
                                
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input required name="lname" id="lname" type="text" class="form-control form-control-lg" placeholder="Last Name"/>
                                </div> </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="button" class="btn btn-success mr-2">Find</button>
                            <button type="button" onclick="resetfun()" class="btn btn-success mr-2">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
function resetfun() {
    document.getElementById("dpss-data").reset();
}
</script>
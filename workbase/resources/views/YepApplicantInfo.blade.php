@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Applicant Data Search</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="searchapplicant" name="searchapplicant" method="POST" name="form"
                                      enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>SSN No: <i
                                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                                <input required name="ssn" required="required" maxlength="4" id="ssn"
                                                       type="text" class="form-control form-control-lg"
                                                       onkeypress="return isNumberKey(event);"
                                                       placeholder="Last 4 SSN"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date of Birth: <i
                                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                                <input name="dob" id="dob" required="required" type="date"
                                                       max="9999-12-31"
                                                       class="form-control form-control-lg"
                                                       placeholder="Date of Birth"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Last Name: <i
                                                            class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                                <input required name="lname" required="required" id="lname" type="text"
                                                       class="form-control form-control-lg" placeholder="Last Name"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" onclick="searchdata();" class="btn btn-success mr-2">
                                            Search
                                        </button>
                                        <button type="button" onclick="resetfun();" class="btn btn-info mr-2">Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="searchDataDiv">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>

    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode != 46 && charCode > 31
            && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function resetfun() {
        $('#searchDataDiv').html('');
        document.getElementById('dpss-data').reset();
    }

    function searchdata() {
        var ssn = $('#ssn').val();
        var dob = $('#dob').val();
        var appid = $('#appid').val();
        var lname = $('#lname').val();
        var fname = $('#fname').val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        var x = document.forms['searchapplicant']['ssn'].value;
        if (x == null || x == '') {
            // alert("Name must be filled out");
            $('#ssn').attr('placeholder', 'Kindly fill last 4 digits of SSN');
            $('#ssn').css('border-color', 'red');
            $('#ssn').focus();
            return false;
        } else {
            $('#ssn').css('border-color', '');
            $('#ssn').attr('placeholder', 'last 4 SSN');
        }

        var y = document.forms['searchapplicant']['dob'].value;
        if (y == null || y == '') {
            $('#dob').attr('placeholder', 'Kindly fill your date of birth');
            $('#dob').css('border-color', 'red');
            $('#dob').focus();
            return false;
        } else {
            $('#dob').css('border-color', '');
            $('#dob').attr('placeholder', 'dob');
        }

        var z = document.forms['searchapplicant']['lname'].value;
        if (z == null || z == '') {
            $('#lname').attr('placeholder', 'Kindly fill Last Name.');
            $('#lname').css('border-color', 'red');
            $('#lname').focus();
            return false;
        } else {
            $('#lname').css('border-color', '');

            $.ajax({
                url: '{{url('/')}}/ajaxsearch',
                type: 'POST',
                data: {_token: CSRF_TOKEN, ssn: ssn, dob: dob, appid: appid, lname: lname, fname: fname},
                success: function(data) {
                    $('#searchDataDiv').html(data);
                },
                error: function(e) {
                    console.log(e.responseText);
                },
            });

        }

    }
</script>
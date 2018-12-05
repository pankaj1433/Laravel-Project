@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User Roles</div>
                    <div class="panel-body">
                        <form method="POST" action="{{url('/agencyUser/roleSave')}}"
                              id="createNewUserRole">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
                                            <label class="control-label">User Name:</label>
                                            <input type="hidden" name="user_id" id="userId"
                                                   value="{{isset($users[0])?$users[0]->id:""}}">
                                            <input type="text" name="username" class="form-control" id="userId" readonly
                                                   value="{{isset($users[0])?$users[0]->username:""}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="control-label">Full Name:</label>
                                            <input class="form-control" id="fullName" name="fullname"
                                                   value="{{isset($users[0])?$users[0]->firstname." ".$users[0]->lastname:""}}"
                                                   readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('role_id') ? ' has-error' : '' }}">
                                            <label class="control-label">Role:</label>
                                            <select class="form-control roles" id="role"
                                                    name="role_id">
                                                <option value="">Select Role</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}"
                                                            @if(old('role_id')=="$role->id") selected="selected"@endif>{{ $role->display_name }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('role_id'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('role_id') }}</strong>
                                                 </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('start_date') ? ' has-error' : '' }}">
                                            <label class="control-label">Start Date:</label>
                                            <input type="date" class="form-control" name="start_date"
                                                   style="width: 60%"
                                                   value="{{old('start_date',$currentDate)}}">

                                            @if ($errors->has('start_date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('start_date') }}</strong>
                                                 </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('end_date') ? ' has-error' : '' }}">
                                            <label class="control-label">End Date:</label>

                                            <input type='date' class="form-control" name="end_date" style="width: 60%"
                                                   value="{{old('end_date')}}"/>

                                            @if ($errors->has('end_date'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('end_date') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        <a href="{{url('/agencyUser/roles')}}" class="btn btn-primary pull-right"
                           style="margin-left: 20px">Close</a>
                        <button type="submit" class="btn btn-primary pull-right" id="save">Save</button>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#save').click(function() {
                $('#createNewUserRole').submit();
            });

            $('.datepicker').datepicker({
                dateFormat: 'mm-dd-yy',
            });

            $('.users').select2();
            $('.roles').select2();

            $('#userId').change(function() {
                var userId = $(this).val();
                $.ajax({
                    url: '/agencyUser/' + userId + '/getUserFullName',
                    type: 'get',
                    success: function(data) {
                        $fullName = data[0].firstname + ' ' + data[0].lastname;
                        $('#fullName').val($fullName);
                    },

                });
            });

            var sessionHasSuccessMessage = '{{session()->has('message')}}';
            var sessionHasErrorMessage = '{{session()->has('error')}}';
            if (sessionHasSuccessMessage) {
                swal({
                    title: '{{session()->get('message')}}',
                    type: 'success',
                });
            }

            if (sessionHasErrorMessage) {
                swal({
                    title: '{{session()->get('error')}}',
                    type: 'error',
                });
            }

        });
    </script>
@endsection

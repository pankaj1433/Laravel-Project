@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User Roles</div>
                    <div class="panel-body">
                        <form method="POST" action="{{url('/agencyUser/'.$userRole[0]->id.'/updateRole')}}"
                              id="updateUserRole">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('user_id') ? ' has-error' : '' }}">
                                            <label class="control-label">Select User:</label>
                                            <select class="form-control users" name="user_id" disabled>
                                                <option>User:</option>
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}"
                                                            @if($user->id == $userRole[0]->user_id) selected="selected" @endif>{{ $user->username }}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('user_id'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('user_id') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            @php
                                                $fullName = $userRole[0]->firstname.' '.$userRole[0]->lastname;
                                            @endphp
                                            <label class="control-label">Full Name:</label>
                                            <input class="form-control" id="fullName" value="{{$fullName}}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{ $errors->has('role_id') ? ' has-error' : '' }}">
                                            <label class="control-label">Role:</label>
                                            <select class="form-control roles" id="role" disabled
                                                    name="role_id">
                                                <option>Select Role:</option>
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}"
                                                            @if($role->id == $userRole[0]->role_id) selected="selected" @endif>{{ $role->display_name }}</option>
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

                                            <input type="date" class="form-control" name="start_date" readonly
                                                   style="width: 60%"
                                                   value="{{old('start_date',$userRole[0]->start_date)}}">

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
                                            <input type="date" class="form-control" name="end_date" style="width: 60%"
                                                   value="{{old('end_date',$userRole[0]->end_date)}}">

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
                        <a href="{{url('/agencyUser/roles')}}" class="btn btn-primary pull-right" style="margin-left: 20px">Close</a>
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
                $('#updateUserRole').submit();
            });

            $('.datepicker').datepicker({
                dateFormat: 'mm-dd-yy',
            });

            $('.users').select2();
            $('.roles').select2();

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

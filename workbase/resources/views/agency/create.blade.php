@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$panelHeadingLabel}}</div>
                    <form method="post" name="form" action="{{$action}}">
                        <div class="panel-body">
                            {{ csrf_field() }}
                            <input type="hidden" name="org_type" value="AGENCY_USER"/>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-md-5">
                                        <div class="form-group {{$errors->has('organization_id')?'has-error':''}}">
                                            <label class="control-label">Agency:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input type="hidden" name="organization_id"
                                                   value="{{$authUserOrganizationId}}">
                                            <select class="form-control"
                                                    name="organization_id" {{$agencyFieldReadOnly}}>
                                                <option value="">Select an Agency</option>
                                                @foreach($agencies as $agency)
                                                    <option value="{{$agency->ORGANIZATION_ID}}"
                                                            @if(old('organization_id',isset($editUser)?$editUser->organization_id:"$authUserOrganizationId")=="$agency->ORGANIZATION_ID") selected="selected" @endif>{{$agency->LWIA_CD}}
                                                        -{{$agency->AGCY_NAM }}</option>
                                                @endforeach
                                            </select>

                                            @if($errors->has('organization_id'))
                                                <span class="help-block">{{$errors->first('organization_id')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('username')?'has-error':''}}">
                                            <label class="control-label">Username:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="username" id="username" type="text"
                                                   class="form-control form-control-lg" placeholder="username"
                                                   {{$userNameReadOnly}}
                                                   value="{{old('username',isset($editUser)?$editUser->username:'')}}"
                                            />
                                            @if($errors->has('username'))
                                                <span class="help-block">{{$errors->first('username')}}</span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('firstname')?'has-error':''}}">
                                            <label class="control-label">First Name:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="firstname" id="firstname" type="text" onkeydown="return alphaOnly(event);"
                                                   class="form-control form-control-lg" placeholder="First Name"
                                                   value="{{old('firstname',isset($editUser)?$editUser->firstname:'')}}"
                                            />
                                            @if($errors->has('firstname'))
                                                <span class="help-block">{{$errors->first('firstname')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('lastname')?'has-error':''}}">
                                            <label class="control-label">Last Name:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="lastname" id="lastname" type="text" onkeydown="return alphaOnly(event);"
                                                   class="form-control form-control-lg"
                                                   placeholder="Last Name"
                                                   value="{{old('lastname',isset($editUser)?$editUser->lastname:'')}}"/>
                                            @if($errors->has('lastname'))
                                                <span class="help-block">{{$errors->first('lastname')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('middle_initial')?'has-error':''}}">
                                            <label class="control-label">Middle Initial</label>
                                            <input name="middle_initial" id="middle_initial" type="text" onkeydown="return alphaOnly(event);"
                                                   class="form-control form-control-lg" placeholder="Middle Initial"
                                                   value="{{old('middle_initial',isset($editUser)?$editUser->middle_initial:'')}}"/>
                                            @if($errors->has('middle_initial'))
                                                <span class="help-block">{{$errors->first('middle_initial')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-md-4">
                                        <div class="form-group {{$errors->has('email')?'has-error':''}}">
                                            <label class="control-label">Client Email:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="email" id="email" type="email"
                                                   class="form-control form-control-lg" placeholder="Contact Email"
                                                   value="{{old('email',isset($editUser)?$editUser->email:'')}}"/>
                                            @if($errors->has('email'))
                                                <span class="help-block">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{$errors->has('phone_no_1')?'has-error':''}}">
                                            <label class="control-label">Client Phone Number 1:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="phone_no_1" id="phone_no_1" type="text"
                                                   class="form-control form-control-lg phone"
                                                   placeholder="Client Phone Number 1"
                                                   value="{{old('phone_no_1',isset($editUser)?$editUser->phone_no_1:'')}}"/>
                                            @if($errors->has('phone_no_1'))
                                                <span class="help-block">{{$errors->first('phone_no_1')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group {{$errors->has('phone_no_2')?'has-error':''}}">
                                            <label class="control-label">Client Phone Number 2</label>
                                            <input name="phone_no_2" id="phone_no_2" type="text"
                                                   class="form-control form-control-lg phone"
                                                   placeholder="Client Phone Number 2"
                                                   value="{{old('phone_no_2',isset($editUser)?$editUser->phone_no_2:"")}}"/>
                                            @if($errors->has('phone_no_2'))
                                                <span class="help-block">{{$errors->first('phone_no_2')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="col-md-4">
                                        <div class="form-group {{$errors->has('address_1')?'has-error':''}}">
                                            <label class="control-label">Address Line 1:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="address_1" id="address_1" type="text"
                                                   class="form-control form-control-lg" placeholder="Address Line 1"
                                                   value="{{old('address_1',isset($editUser)?$editUser->address_1:'')}}"/>
                                            @if($errors->has('address_1'))
                                                <span class="help-block">{{$errors->first('address_1')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('city')?'has-error':''}}">
                                            <label class="control-label">City:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="city" id="city" type="text"
                                                   class="form-control form-control-lg" placeholder="City"
                                                   value="{{old('city',isset($editUser)?$editUser->city:'')}}"/>
                                            @if($errors->has('city'))
                                                <span class="help-block">{{$errors->first('city')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('state')?'has-error':''}}">
                                            <label class="control-label">State:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="state" id="state" type="text"
                                                   class="form-control form-control-lg" placeholder="State"
                                                   readonly="readonly"
                                                   value="{{old('state',isset($editUser)?$editUser->state:'CA')}}"/>
                                            @if($errors->has('state'))
                                                <span class="help-block">{{$errors->first('state')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('zipcode')?'has-error':''}}">
                                            <label class="control-label">Zipcode:<i
                                                        class="glyphicon glyphicon-asterisk required-field-symbol"></i></label>
                                            <input name="zipcode" id="zipcode" type="text" maxlength="5"
                                                   class="form-control form-control-lg" placeholder="Zipcode"
                                                   value="{{old('zipcode',isset($editUser)?$editUser->zipcode:"")}}"/>
                                            @if($errors->has('zipcode'))
                                                <span class="help-block">{{$errors->first('zipcode')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! $buttons !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Agency Users</div>
                    <div class="panel-body">
                        <table id="agencyUsers" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>User Name</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Agency Name</th>
                                <th>Edit User</th>
                                <th>Reset Password</th>
                            </tr>
                            </thead>
                            {{--<tbody>--}}
                            {{--@foreach($users as $user)--}}
                            {{--<tr>--}}
                            {{--<td>{{$user->username}}</td>--}}
                            {{--<td>{{$user->lastname}}</td>--}}
                            {{--<td>{{$user->firstname}}</td>--}}
                            {{--<td>{{$user->email}}</td>--}}
                            {{--<td>{{$user->LWIA_CD}}-{{$user->AGCY_NAM}}</td>--}}
                            {{--<td>--}}
                            {{--<a href="{{url('/agencyUser/'.$user->id.'/edit')}}" title="Edit User"><i--}}
                            {{--class="fas fa-edit">&nbsp;&nbsp;Edit User</i></a>--}}
                            {{--</td>--}}
                            {{--<td>--}}
                            {{--<a href="{{url('/agencyUser/'.$user->id.'/resetPassword')}}"--}}
                            {{--class="btn  confirm"><i class="fas fa-key">&nbsp;Reset Password</i></a>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--@endforeach--}}
                            {{--</tbody>--}}

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>

        $('table').on('click', '#confirm', function(event) {
            let target = $(this).attr('href');
            let username = $(this).parent().siblings(':first-child').text();
            event.preventDefault();
            $.confirm({
                title: '',
                content: 'Are you sure you want to reset "' + username + '"  password',
                icon: 'fa fa-question-circle',
                animation: 'scale',
                closeAnimation: 'scale',
                opacity: 0.5,
                theme: 'supervan',
                buttons: {
                    Yes: function() {
                        window.location = target;
                    },
                    No: function() {
                        $.alert('Cancel!');
                    },
                },
            });
        });



        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8);
        }

        $(document).ready(function() {
            $('.phone').mask('(000)-000-0000');

            $('#CancelButton').click(function() {
                window.location.href = '{{url('/yep')}}';
            });
            $('.confirmation').on('click', function() {
                return confirm('Are you sure you want to reset password?');
            });

            $uri = "{{url('/')}}";
            var table = $('#agencyUsers').DataTable({
                dom: 'Blfrtip',
                lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']],
                order: [[1, 'asc']],
                scrollX: true,
                orderCellsTop: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: $uri + '/agencyUsers',
                    type: 'get',
                },
                columns: [
                    {data: 'username', name: 'users.username'},
                    {data: 'lastname', name: 'users.lastname'},
                    {data: 'firstname', name: 'users.firstname'},
                    {data: 'email', name: 'users.email'},
                    {data: 'AGCY_NAM', name: 'agencies.AGCY_NAM'},
                    {data: 'edit_user', name: 'edit_user', orderable: false, searchable: false},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],

            });

        });
    </script>
@endsection

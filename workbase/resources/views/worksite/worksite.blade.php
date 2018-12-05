@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Worksite</div>
                    <form method="post" action="{{$action}}">
                        {{csrf_field()}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('worksite_name')?'has-error':''}}">
                                            <label>Worksite</label><i
                                                    class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="worksite_name"
                                                   value="{{old('worksite_name',isset($editWorksite)?$editWorksite->worksite_name:"")}}">
                                            @if($errors->has('worksite_name'))
                                                <span class="help-block">{{$errors->first('worksite_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('address_line_1')?'has-error':''}}">
                                            <label class="control-label">Address Line 1</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="address_line_1"
                                                   value="{{old('address_line_1',isset($editWorksite)?$editWorksite->address_line_1:"")}}">
                                            @if($errors->has('address_line_1'))
                                                <span class="help-block">{{$errors->first('address_line_1')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('address_line_2')?'has-error':''}}">
                                            <label class="control-label">Address Line 2</label>
                                            <input type="text" class="form-control" name="address_line_2"
                                                   value="{{old('address_line_2',isset($editWorksite)?$editWorksite->address_line_2:"")}}">
                                            @if($errors->has('address_line_2'))
                                                <span class="help-block">{{$errors->first('address_line_2')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('address_line_3')?'has-error':''}}">
                                            <label class="control-label">Address Line 3</label>
                                            <input type="text" class="form-control" name="address_line_3"
                                                   value="{{old('address_line_3',isset($editWorksite)?$editWorksite->address_line_3:"")}}">
                                            @if($errors->has('address_line_3'))
                                                <span class="help-block">{{$errors->first('address_line_3')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('city')?'has-error':''}}">
                                            <label class="control-label">City</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="city"
                                                   value="{{old('city',isset($editWorksite)?$editWorksite->city:"")}}">
                                            @if($errors->has('city'))
                                                <span class="help-block">{{$errors->first('city')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('state')?'has-error':''}}">
                                            <label class="control-label">State</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="state"
                                                   value="{{old('state',isset($editWorksite)?$editWorksite->state:"")}}">
                                            @if($errors->has('state'))
                                                <span class="help-block">{{$errors->first('state')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('zip_code')?'has-error':''}}">
                                            <label class="control-label">Zip Code</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="zip_code"
                                                   value="{{old('zip_code',isset($editWorksite)?$editWorksite->zip_code:"")}}">
                                            @if($errors->has('zip_code'))
                                                <span class="help-block">{{$errors->first('zip_code')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('supervisory_district')?'has-error':''}}">
                                            <label class="control-label">Supervisory District</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <select class="form-control" name="supervisory_district">
                                                <option>Select an option</option>
                                                @foreach($supervisorDistricts as $supervisorDistrict)
                                                    <option value="{{$supervisorDistrict->sup_district_name}}"
                                                            @if(old('supervisory_district',isset($editWorksite)?$editWorksite->sup_district_name:"")==$supervisorDistrict->sup_district_name) selected="selected" @endif>{{$supervisorDistrict->sup_district_name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('supervisory_district'))
                                                <span class="help-block">{{$errors->first('supervisory_district')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('contact_person')?'has-error':''}}">
                                            <label class="control-label">Contact Person</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="contact_person"
                                                   value="{{old('contact_person',isset($editWorksite)?$editWorksite->contact_person:"")}}">
                                            @if($errors->has('contact_person'))
                                                <span class="help-block">{{$errors->first('contact_person')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('phone')?'has-error':''}}">
                                            <label class="control-label">Phone</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="phone"
                                                   value="{{old('phone',isset($editWorksite)?$editWorksite->phone:"")}}">
                                            @if($errors->has('phone'))
                                                <span class="help-block">{{$errors->first('phone')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('email')?'has-error':''}}">
                                            <label class="control-label">Email</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <input type="text" class="form-control" name="email"
                                                   value="{{old('email',isset($editWorksite)?$editWorksite->email:"")}}">
                                            @if($errors->has('email'))
                                                <span class="help-block">{{$errors->first('email')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('worksite_sector')?'has-error':''}}">
                                            <label class="control-label">Worksite Sector</label><i
                                                    class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                            <label class="radio-inline"><input type="radio" name="worksite_sector"
                                                                               value="Public"
                                                                               @if(old('worksite_sector',isset($editWorksite)?$editWorksite->worksite_sector:"")=="Public") checked @endif>Public</label>
                                            <label class="radio-inline"><input type="radio" name="worksite_sector"
                                                                               value="Private"
                                                                               @if(old('worksite_sector',isset($editWorksite)?$editWorksite->worksite_sector:"")=="Private") checked @endif>Private</label>
                                            <label class="radio-inline"><input type="radio" name="worksite_sector"
                                                                               value="Non Profit"
                                                                               @if(old('worksite_sector',isset($editWorksite)?$editWorksite->worksite_sector:"")=="Non Profit") checked @endif>Non
                                                Profit</label>
                                            @if($errors->has('worksite_sector'))
                                                <span class="help-block">{{$errors->first('worksite_sector')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('city_or_county_department')?'has-error':''}}">
                                            <label class="control-label">City or County Department?</label>
                                            <select class="form-control" name="city_or_county_department">
                                                <option value="">Select an option</option>
                                                @foreach($countyDepartments as $countyDepartment)
                                                    <option value="{{$countyDepartments->county_department_name}}" @if(old('city_or_county_department',isset($editWorksite)?$editWorksite->city_or_county_department:"")==$countyDepartments->county_department_name) selected="selected" @endif>{{$countyDepartments->county_department_name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('city_or_county_department'))
                                                <span class="help-block">{{$errors->first('city_or_county_department')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('department')?'has-error':''}}">
                                            <label class="control-label">Department</label>
                                            <select class="form-control" name="department">
                                                <option value="">Select an option</option>
                                                @foreach($departments as $department)
                                                    <option value="{{$department->department_name}}" @if(old('department',isset($editWorksite)?$editWorksite->department:"")==$department->department_name) selected="selected" @endif>{{$department->department_name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('department'))
                                                <span class="help-block">{{$errors->first('department')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('industry')?'has-error':''}}">
                                            <label class="control-label">Industry</label>
                                            <i class="glyphicon glyphicon-asterisk required-field-symbol"></i>
                                            <select class="form-control" name="industry">
                                                <option value="">Select an option</option>
                                                @foreach($industries as $industries)
                                                    <option value="{{$industries->industry_name}}" @if(old('industry',isset($editWorksite)?$editWorksite->industry:"")==$industries->industry_name) selected="selected" @endif>{{$industries->industry_name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('industry'))
                                                <span class="help-block">{{$errors->first('industry')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <div class="form-group {{$errors->has('naics_code')?'has-error':''}}">
                                            <label class="control-label">NAICS Code</label>
                                            <input type="text" class="form-control" name="naics_code"
                                                   value="{{old('naics_code',isset($editWorksite)?$editWorksite->naics_code:"")}}">
                                            @if($errors->has('naics_code'))
                                                <span class="help-block">{{$errors->first('naics_code')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group {{$errors->has('naics_description')?'has-error':''}}">
                                            <label class="control-label">NAICS Description</label>
                                            <input type="text" class="form-control" name="naics_description"
                                                   value="{{old('naics_description',isset($editWorksite)?$editWorksite->naics_description:"")}}">
                                            @if($errors->has('naics_description'))
                                                <span class="help-block">{{$errors->first('naics_description')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('record_status')?'has-error':''}}">
                                            <label class="control-label">Active?</label><br>
                                            <label class="radio-inline"><input type="radio" name="record_status"
                                                                               @if(old('record_status',isset($editWorksite)?$editWorksite->record_status:"")=="Active") checked @endif
                                                                               value="Active">Active</label>
                                            <label class="radio-inline"><input type="radio" name="record_status"
                                                                               value="InActive" @if(old('record_status',isset($editWorksite)?$editWorksite->record_status:"")=="InActive") checked @endif>InActive</label>

                                            @if($errors->has('record_status'))
                                                <span class="help-block">{{$errors->first('record_status')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group {{$errors->has('ada_complied')?'has-error':''}}">
                                            <label class="control-label">ADA Complied</label><i
                                                    class="glyphicon glyphicon-asterisk required-field-symbol"></i><br>
                                            <label class="radio-inline"><input type="radio" name="ada_complied"
                                                                               @if(old('ada_complied',isset($editWorksite)?$editWorksite->ada_complied:"")=="Yes") checked @endif
                                                                               value="Yes">Yes</label>
                                            <label class="radio-inline"><input type="radio" name="ada_complied"
                                                                               value="No"
                                                                               @if(old('ada_complied',isset($editWorksite)?$editWorksite->ada_complied:"")=="No") checked @endif>No</label>

                                            @if($errors->has('ada_complied'))
                                                <span class="help-block">{{$errors->first('ada_complied')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            {!! $footerButton !!}
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Current Worksites</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped" id="worksites">
                                    <thead>
                                    <tr>
                                        <th>Worksite</th>
                                        <th>Address</th>
                                        <th>Contact Person</th>
                                        <th>Phone</th>
                                        <th>Worksite Category</th>
                                        <th>Edit Location</th>
                                        <th>Industry</th>
                                        <th>Record Status</th>
                                        <th>NAICS Code</th>
                                        <th>NAICS Description</th>
                                        <th>City or County Department</th>
                                    </tr>
                                    </thead>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var urlPath = "{{url('/')}}";
        var table = $('#worksites').DataTable({
            dom: 'Blfrtip',
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']],
            order: [[1, 'asc']],
            scrollX: true,
            orderCellsTop: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: urlPath + '/getWorksites',
                type: 'get',
            },
            columns: [
                {data: 'worksite_name', name: 'worksite_name'},
                {data: 'address_line_1', name: 'address_line_1'},
                {data: 'contact_person', name: 'contact_person'},
                {data: 'phone', name: 'phone'},
                {data: 'worksite_sector', name: 'worksite_sector'},
                {data: 'edit_location', name: 'edit_location', orderable: false, searchable: false},
                {data: 'industry', name: 'industry'},
                {data: 'record_status', name: 'record_status'},
                {data: 'naics_code', name: 'naics_code'},
                {data: 'naics_description', name: 'naics_description'},
                {data: 'city_or_county_department', name: 'city_or_county_department'},

            ],

        });
    </script>
@endsection
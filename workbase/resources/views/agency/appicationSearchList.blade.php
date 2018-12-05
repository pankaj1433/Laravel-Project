<table id="example" class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>SSN</th>
        <th>Applicant Name</th>
        <th>Date of Birth</th>
        <th>Eligibility Status</th>
        <th>Current Status</th>
        <th>Address</th>
        <th>Foster Child</th>
        <th>Agency</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(count($searchData)==0)
        <tr>
            <td align="center" colspan="9">No Records Found</td>
        </tr>
    @endif
    @foreach($searchData as $data)
        <tr>
            <td>{{"xxx-xx-".substr($data->ssn,7)}}</td>
            <td>{{$data->first_name.' '.$data->last_name}}</td>
            <td>{{$data->birth_date}}</td>
            <td>{{$data->eligible_to_work}}</td>
            <td>{{$data->current_status}}</td>
            <td>{{$data->address_residence.' '.$data->city.''.$data->state.''.$data->zip_code}}</td>
            <td>{{$data->foster_child}}</td>
            <td>{{$data->agency}}</td>
            <td><a href="{{url('/application/'.$data->id.'/edit')}}">Edit</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
@if(count($searchData)==0)
<p>Note: if the applicant is not in database, Please proceed with database.</p>
<a class="bth btn-lg btn-info" id="newApplicationForm" href="application-form" style="text-decoration: none">Click here
    to start a blank application</a>
@endif
<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorksiteRequest;
use App\Models\CountyDepartment;
use App\Models\Department;
use App\Models\Industry;
use App\Models\SupDistrict;
use App\Models\Worksite;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WorksiteController extends Controller
{
    public function createWorksite()
    {
        $action = url('worksite/create');
        $footerButton = '<button type="submit" class="btn btn-primary">Create Worksite</button>';
        $departments = Department::orderBy('department_name', 'asc')->get();
        $industries = Industry::orderBy('industry_name', 'asc')->get();
        $supervisorDistricts = SupDistrict::orderBy('sup_district_name', 'asc')->get();
        $countyDepartments = CountyDepartment::orderBy('county_department_name', 'asc')->get();

        return view('worksite.worksite',
            compact('action', 'footerButton', 'departments', 'industries', 'supervisorDistricts', 'countyDepartments'));
    }

    public function getWorksites()
    {
        $query = Worksite::select(['worksites.*']);

        return Datatables::of($query)
            ->addColumn('edit_location', function ($query) {
                return '<a href="/worksite/' . $query->id . '/edit" title="Edit Location"><i
                                            class="fas fa-edit">&nbsp;&nbsp;Edit Location</i></a>';
            })
            ->rawColumns(['edit_location'])
            ->make(true);
    }

    public function saveWorksite(WorksiteRequest $request)
    {

        $worksite = new Worksite;
        $worksite->create($request->all());

        $notification = array(
            'message' => 'Work Site Created successfully',
            'alert-type' => 'success'
        );

        return redirect('worksite/create')->with($notification);

    }

    public function editWorkSite($id)
    {
        $editWorksite = Worksite::findOrFail($id);
        $action = url('worksite/' . $editWorksite->id . '/update');
        $footerButton = '<button type="submit" class="btn btn-primary">Update Worksite</button>';
        $departments = Department::orderBy('department_name', 'asc')->get();
        $industries = Industry::orderBy('industry_name', 'asc')->get();
        $supervisorDistricts = SupDistrict::orderBy('sup_district_name', 'asc')->get();
        $countyDepartments = CountyDepartment::orderBy('county_department_name', 'asc')->get();
        return view('worksite.worksite',
            compact('editWorksite', 'action', 'footerButton', 'departments', 'industries', 'supervisorDistricts',
                'countyDepartments'));
    }

    public function updateWorkSite(WorksiteRequest $request, $id)
    {
        $updateWorksite = Worksite::findOrFail($id);
        $updateWorksite->update($request->all());

        $notification = array(
            'message' => 'Work Site Updated successfully',
            'alert-type' => 'success'
        );

        return redirect('worksite/create')->with($notification);
    }
}

<?php

namespace App\DataTables\Users;

use App\User;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;
use Carbon\Carbon;
class AgencyUserResponsibilityDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $url = url('/');
        return datatables($query)
            ->editColumn('AGCY_NAM', function ($query) {
                return $query->LWIA_CD . '-' . $query->AGCY_NAM;
            })
            ->filterColumn('agencies.AGCY_NAM', function ($query, $keyword) {
                $sql = "CONCAT(agencies.LWIA_CD,'-',agencies.AGCY_NAM)  like ?";
                $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->editColumn('start_date',function($query){
                return Carbon::parse($query->start_date)->format('m-d-Y');
            })
            ->editColumn('end_date',function($query){
                return Carbon::parse($query->end_date)->format('m-d-Y');
            })
            ->addColumn('id', function ($userId) {
                $url = url('/');
                return '<a href= "'.$url .'/agencyUser/' . $userId->userid . '/assignRole">Assign Responsibility</a>';
            })
            ->addColumn('action', '<a href="'.$url .'/agencyUser/{{$id}}/editAgencyUserRole">Edit</a>')
            ->rawColumns(['id', 'action']);

    }

    /**
     * Get query source of dataTable.
     *
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $query = User::join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'roles.id', '=', 'role_user.role_id')
            ->join('agencies', 'users.organization_id', '=', 'agencies.ORGANIZATION_ID')
            ->where('users.org_type', '=', "AGENCY_USER");

        if (Auth::user()->hasRole('AGENCY_ADMIN')) {
            $authUserOrganizationId = auth()->user()->organization_id;
            $userRoles = $query->where('users.organization_id', '=', $authUserOrganizationId)
                ->where('roles.name','!=','AGENCY_ADMIN')
                ->select([
                    'users.username',
                    'users.id as userid',
                    'users.firstname',
                    'users.lastname',
                    'roles.display_name',
                    'role_user.*',
                    'agencies.AGCY_NAM',
                    'agencies.LWIA_CD'
                ]);
        } else {
            $userRoles = $query->select([
                'users.username',
                'users.id as userid',
                'users.firstname',
                'users.lastname',
                'roles.display_name',
                'role_user.*',
                'agencies.AGCY_NAM',
                'agencies.LWIA_CD'
            ]);
        }

        return $userRoles;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters($this->getBuilderParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        if(auth()->user()->org_type!="AGENCY_USER") {
            return [
                'UserName' => ['data' => 'username', 'name' => 'users.username'],
                'FirstName' => ['data' => 'firstname', 'name' => 'users.firstname'],
                'LastName' => ['data' => 'lastname', 'name' => 'users.lastname'],
                'RoleName' => ['data' => 'display_name', 'name' => 'roles.display_name'],
                'start_date' => ['data' => 'start_date', 'name' => 'role_user.start_date'],
                'end_date' => ['data' => 'end_date', 'name' => 'role_user.end_date'],
                'Assign Responsibility' => ['data' => 'id', 'name' => 'users.id'],
                'Agency Name' => ['data' => 'AGCY_NAM', 'name' => 'agencies.AGCY_NAM'],
            ];
        }else{
            return [
                'UserName' => ['data' => 'username', 'name' => 'users.username'],
                'FirstName' => ['data' => 'firstname', 'name' => 'users.firstname'],
                'LastName' => ['data' => 'lastname', 'name' => 'users.lastname'],
                'RoleName' => ['data' => 'display_name', 'name' => 'roles.display_name'],
                'start_date' => ['data' => 'start_date', 'name' => 'role_user.start_date'],
                'end_date' => ['data' => 'end_date', 'name' => 'role_user.end_date'],
                'Agency Name' => ['data' => 'AGCY_NAM', 'name' => 'agencies.AGCY_NAM'],
            ];
        }

    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users/AgencyUserResponsibility_' . date('YmdHis');
    }
}

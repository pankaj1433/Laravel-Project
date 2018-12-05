<?php

namespace App\DataTables\Agency;

use App\User;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;

class AgencyUserDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'agency/agencyuser.action');
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param User $model
     */
    public function query()
    {
        $authUserOrganizationId = auth()->user()->organization_id;
        $query = User::join('agencies', 'users.organization_id', '=', 'agencies.ORGANIZATION_ID')
            ->where('users.org_type', '=', 'AGENCY_USER');
        if (Auth::user()->hasRole('AGENCY_ADMIN')) {
            $query = $query->where('users.organization_id', '=', $authUserOrganizationId)
                ->select(['users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD'])
                ->orderBy('lastname', 'asc');

        } else {
            $query = $query->select(['users.*', 'agencies.AGCY_NAM', 'agencies.LWIA_CD'])
                ->orderBy('lastname', 'asc');

        }

        return $query;
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
        return [
            'UserName' => ['data' => 'username', 'name' => 'users.username'],
            'LastName' => ['data' => 'lastname', 'name' => 'users.lastname'],
            'FirstName' => ['data' => 'firstname', 'name' => 'users.firstname'],
            'Email' => ['data' => 'email', 'name' => 'users.email'],
            'AgencyName' => ['data' => 'AGCY_NAM', 'name' => 'agencies.AGCY_NAM'],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Agency/AgencyUser_' . date('YmdHis');
    }
}

<?php

namespace App\DataTables\Agency;


use App\ApplicationFormModel;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Services\DataTable;

class ParticipantListingDataTable extends DataTable
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
            ->editColumn('',function(){

            });
    }

    /**
     * Get query source of dataTable.
     *
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $participantListing = ApplicationFormModel::select(['application_form.*']);

        return $participantListing;
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
            'ApplicationId'=>['data'=>'application_id','name'=>'application_id'],
            'CurrentStatus'=>['data'=>'current_status','name'=>'current_status'],
            //'ViewEnrollment'=>['data'=>'view','name'=>'view','orderable'=>false,'searchable'=>false],
            'Name'=>['data'=>'last_name','name'=>'last_name'],
            'FosterChild'=>['data'=>'foster_child','name'=>'foster_child'],
            'FundingSource'=>['data'=>'funding_source','name'=>'funding_source'],
            'EligibilityStatus'=>['data'=>'application_id','name'=>'application_id','orderable'=>false,'searchable'=>false],
            'EnrollmentStatus'=>['data'=>'application_id','name'=>'action2','orderable'=>false,'searchable'=>false],
            'PetStatus'=>['data'=>'application_id','name'=>'action3','orderable'=>false,'searchable'=>false],
            'PetHours'=>['data'=>'application_id','name'=>'action4','orderable'=>false,'searchable'=>false],
            'StaffID'=>['data'=>'application_id','name'=>'action5','orderable'=>false,'searchable'=>false],
            'StaffNote'=>['data'=>'application_id','name'=>'action6','orderable'=>false,'searchable'=>false],
            'CurrentJobLocation'=>['data'=>'application_id','name'=>'action7','orderable'=>false,'searchable'=>false],
            'PlacementExit'=>['data'=>'application_id','name'=>'action8','orderable'=>false,'searchable'=>false],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Agency/ParticipantListing_' . date('YmdHis');
    }
}

<?php

namespace App\DataTables;

use App\Models\Applicant;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ApplicantDataTable extends DataTable {

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query) {
        return datatables()
                        ->eloquent($query)
                        ->addIndexColumn()
                        ->editColumn('created_at', function($model) {
                            return ($model->created_at ? $model->created_at->format('d-M-Y h:iA') : '');
                        })
                        ->addColumn('action', function ($model) {
                            $button = '';
                            $button .= '<div class="btn-group" role="group">';
                            $button .= '<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">Action</button>';
                            $button .= '<form action="' . route('applicants.destroy', $model->id) . '" method="POST" style="display:dispaly-inline;">';
                            $button .= '<input type="hidden" name="_method" value="DELETE">';
                            $button .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                            $button .= '<button type="submit" class="btn btn-sm btn-danger ml-1" onclick="return confirm(\'' . __('Anda pasti untuk padam?') . '\')"><i class="fas fa-trash"></i></button>';
                            $button .= '</form>';
                            $button .= '<div class="dropdown-menu">';
                            $button .= '<a class="dropdown-item" href="' . route('applicants.show', $model->id) . '"><i class="fas fa-eye mr-1"></i> Papar Maklumat </a>';
                            $button .= '<a class="dropdown-item" href="' . route('pdf.show', $model->id) . '"><i class="fas fa-file-download mr-1"></i> Muat Turun PDF</i></a>';
                            $button .= '</div>';
                            $button .= '</div>';

                            return $button;
                        });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Applicant $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Applicant $model) {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html() {
        return $this->builder()
                        ->setTableId('applicant-table')
                        ->columns($this->getColumns())
                        ->minifiedAjax()
                        ->orderBy([4, 'desc'])
                        ->autoWidth(true)
                        ->parameters([
                            'responsive' => true,
                            'pageLength' => 50
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns() {
        return [
            Column::make('name')->title(__('applicants.name')),
            Column::make('ic_no')->title(__('applicants.ic_no')),
            Column::make('race')->title(__('applicants.race')),
            Column::make('state')->title(__('applicants.state')),
            Column::make('created_at')->title(__('applicants.created_at')),
                    Column::computed('action')->title(__('applicants.action'))
                    ->searchable(false)
                    ->orderable(false)
                    ->exportable(false)
                    ->printable(false)
                    ->width(60)
                    ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() {
        return 'Applicant_' . date('YmdHis');
    }

}

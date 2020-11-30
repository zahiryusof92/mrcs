@extends('layouts.backend.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 pt-3 pb-2">
        <div class="card bg-warning">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ __('Permohonan Hari Ini') }}</strong></h5>
                <p class="card-text">{{ \App\Models\Applicant::getTotalToday() }} {{ __('applicants.title') }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 pt-3 pb-2">
        <div class="card bg-info">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ __('Permohonan Semalam') }}</strong></h5>
                <p class="card-text">{{ \App\Models\Applicant::getTotalYesterday() }} {{ __('applicants.title') }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 pt-3 pb-3">
        <div class="card bg-success">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ __('Semua Permohonan') }}</strong></h5>
                <p class="card-text">{{ \App\Models\Applicant::getTotalAll() }} {{ __('applicants.title') }}</p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="mb-3">
                    <a href="{{ route('excel.index') }}" class="btn btn-sm btn-success">Eksport Semua <i class="fas fa-file-export ml-1"></i></a>
                </div>

                <div class="table-responsive">
                    {!! $dataTable->table(['class' => 'table table-hover', 'style' => 'width: 100%']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
{!! $dataTable->scripts() !!}
@endpush
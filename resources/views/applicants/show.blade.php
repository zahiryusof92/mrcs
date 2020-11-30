@extends('layouts.backend.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{ __('Maklumat Pemohon') }} ({{ $applicant->ic_no }})
            </div>

            <div class="card-body">

                <div class="text-right mb-3">
                    <a href="{{ route('pdf.show', $applicant->id) }}" class="btn btn-sm btn-success mr-1">Muat Turun PDF <i class="fas fa-file-download ml-1"></i></a>
                    <a href="{{ route('home') }}" class="btn btn-sm btn-danger">Kembali <i class="fas fa-arrow-circle-left ml-1"></i></a>
                </div>

                <h5 class="text-center"><strong>{{ __('questions.title') }}</strong></h5>

                @if ($questions)
                @php $count = 1 @endphp

                <ol>
                    @foreach ($questions as $question)
                    <strong><li value="{{ $count++ }}">{{ __('questions.' . $question->key . '.title') }}</li></strong>
                    <!-- /question -->
                    {{ $question->answer }}
                    <!-- /answer -->
                    <br/><br/>
                    @endforeach
                </ol>
                @else
                <p>Tiada maklumat.</p>
                @endif

            </div>
        </div>
    </div>
</div>
@endsection
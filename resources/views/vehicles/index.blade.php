
@extends('layouts.admin',  ['title' => 'test'])


@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5 ">
        <a href="{{route('vehicles.create')}}" class="btn btn-primary me-md-2 " type="button">Add vehicle</a>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-header">Vehicles</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush


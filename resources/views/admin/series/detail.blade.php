@extends('layouts.admin')

@section('title')
    {{ $dataSeries->judul }}
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="container-fluid">
                @include('layouts.series.layout-content-series-admin')
            </div>
        </div>
    </div>
@endsection

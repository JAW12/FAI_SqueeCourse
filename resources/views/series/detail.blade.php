@extends('layouts.user')

@section('title')
    {{ $dataSeries->judul }}
@endsection

@section('content')
@include('layouts.alert')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb grey small">
        <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
        <li class="breadcrumb-item">
            <a href="{{ url('series/category/' . $dataSeries->category->slug) }}">
                {{ $dataSeries->category->nama }}
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{ Str::limit($dataSeries->judul, 30, '...') }}
        </li>
    </ol>
</nav>

@include('layouts.series.layout-content-series')

@endsection

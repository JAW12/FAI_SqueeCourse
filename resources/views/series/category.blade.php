@extends('layouts.user')

@section('title')
    {{ $dataCategory->nama }}
@endsection

@section('content')
<div class="w-100" id="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div style="margin-top: 15%">
                    <h2 class="text-light font-weight-light">Explore with</h2>
                    <h1 class="text-light font-weight-bolder">SqueeCourse</h1>
                    <p class="text-light lead mt-4 font-weight-normal">
                        This is a recommended guide from SqueeCourse for you to choose which skills to be upgraded. Each part of it will provides tips and new techniques that can be established based on what you learnt, so don't have doubt to always upgrade your skils.
                    </p>
                    <div class="row no-gutters mb-5">
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'laravel' ? 'active' : ''}}"
                                href="{{ url('series/category/laravel') }}">
                                <h4><i class="fab fa-laravel"></i></h4>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'text-editor' ? 'active' : '' }}"
                                href="{{ url('series/category/text-editor') }}">
                                <h4><i class="fas fa-file-alt"></i></h4>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'css' ? 'active' : '' }}"
                                href="{{ url('series/category/css') }}">
                                <h4><i class="fab fa-css3"></i></h4>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'js' ? 'active' : '' }}"
                                href="{{ url('series/category/js') }}">
                                <h4><i class="fab fa-js"></i></i></h4>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'php' ? 'active' : '' }}"
                                href="{{ url('series/category/php') }}">
                                <h4><i class="fab fa-php"></i></h4>
                            </a>
                        </div>
                        <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <a class="btn btn-outline-light btn-block
                            {{ $dataCategory->slug == 'c' ? 'active' : '' }}"
                                href="{{ url('series/category/c') }}">
                                <h4>C#</h4>
                            </a>
                        </div>
                        {{-- <div class="col-sm-3 col-md-3 col-lg mr-3">
                            <button class="btn btn-outline-light btn-block">
                                <h4><i class="fa fa-css3"></i></h4>
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-4">
    <div class="container">
        {{-- series basics --}}
        <h5>LEARN THE BASICS</h5>
        <div class="row">
            @if (count($dataCategory->series->where('tingkat_kesulitan', 1)) <= 0)
                <div class="col-12 text-center">
                    <h1 class="h5">There are no basic videos for this category.</h1>
                </div>
            @else
                @foreach ($dataCategory->series->where('tingkat_kesulitan', 1) as $series)
                    {{-- <div class="col-12 col-md-6 col-lg-4 mt-3 my-3">
                        <div class="card h-100" style="height: 20rem;">
                            <img class="card-img-top" src="{{ $series->url_foto_banner }}" alt="Card image cap">
                            <div class="card-body">
                                <a href="{{
                                    url('series/category/' . $series->category->slug) }}" class="text-secondary">
                                    {{ $series->category->nama }}
                                </a>
                                <h5 class="card-title mt-1 mb-1" style="height: 3rem;">
                                    <a class="text-dark text-decoration-none"
                                    href="{{ url('series/' . $series->slug) }}">
                                        {{ Str::limit($series->judul, 45, '...') }}
                                    </a>
                                </h5>
                                <a href="{{
                                    url('series/category/' . $series->category->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $series->category->nama }}
                                </a>
                                @foreach ($series->labels as $label)
                                    <a href="
                                    {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                        {{ $label->nama }}
                                    </a>
                                @endforeach
                                <p class="card-text mt-2">
                                    <small class="text-muted">
                                        {{ count($series->episodes) }} Episodes
                                        &middot;

                                        @if ($series->status_complete === 0)
                                            Ongoing
                                        @elseif ($series->status_complete === 1)
                                            Completed
                                        @endif
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div> --}}
                    @include('layouts.series.layout-card-series-simple')
                @endforeach
            @endif

        </div>

        {{-- series advanced --}}
        <h5 class="mt-5">MASTER YOUR UNIVERSE</h5>
        <div class="row mb-5">
            @if (count($dataCategory->series->where('tingkat_kesulitan', '!=', 1)) <= 0)
                <div class="col-12 text-center">
                    <h1 class="h5">There are no advanced videos for this category.</h1>
                </div>
            @else
                @foreach ($dataCategory->series->where('tingkat_kesulitan', '!=', 1) as $series)
                    @include('layouts.series.layout-card-series-simple')
                @endforeach
            @endif


        </div>
    </div>
</div>
@endsection

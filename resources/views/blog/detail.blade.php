@extends('layouts.master')
@section('content')
    @include('blog.layouts.navigation')
    @foreach($postnya as $rowpost)
    <div class="w-100" id="header">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div style="margin-top: 15%">
                        <h1 class="font-weight-bolder">{{$rowpost->judul}}</h1>
                        <a href="{{route('blog.category', $rowpost->category->slug)}}" class="badge badge-pill badge-primary mb-3">{{$rowpost->category->nama}}</a>
                        @foreach($rowpost->labels as $label)
                            <a href="{{route('blog.label', $label->slug)}}" class="badge badge-pill badge-dark mb-3">{{Str::limit($label->nama, 10)}}</a>
                        @endforeach
                        <p class="lead mt-4 font-weight-normal">{{$rowpost->isi}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
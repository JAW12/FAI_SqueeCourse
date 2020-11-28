@extends('layouts.master')
@section('title', 'Squee Course Blog')
@section('content')
    @include('blog.layouts.navigation')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 mt-2 pb-3 border-bottom border-dark d-flex justify-content-between">
                <div>
                    <h1>
                        @if(isset($search))
                            Posts title contains '{{$search}}'
                        @elseif(isset($category))
                            Category : {{$category}}
                        @elseif(isset($label))
                            Label : {{$label}}
                        @else
                            Blog
                        @endif
                        </h1>
                    <div class="text-muted">{{$posts->total()}} post(s) found</div>
                </div>
                <div class="mt-auto">
                    <button id="btnGrid" class="btn btn-dark"><i class="fa fa-th"></i></button>
                    <button id="btnList" class="btn btn-outline-dark"><i class="fa fa-list"></i></button>
                </div>
            </div>
        </div>
        @if(isset($posts) && count($posts) > 0)
        <div class="row no-gutters" id="isiPost">
                @foreach ($posts as $post)
               
                    <div class="post col-12 col-md-6 col-lg-4">
                        <div class="card h-100 mx-1 my-1">
                            <div class="card-body">
                                <a href="{{URL::to('blog')}}/{{$post->slug}}" class="text-dark text-decoration-none">
                                    <h5 class="card-title mb-1">{{Str::limit($post->judul, 30)}}</h5>
                                </a>
                                <a href="{{route('blog.category', $post->category->slug)}}" class="badge badge-pill badge-primary mb-3">{{$post->category->nama}}</a>
                                @foreach($post->labels as $label)
                                    <a href="{{route('blog.label', $label->slug)}}" class="badge badge-pill badge-dark mb-3">{{Str::limit($label->nama, 10)}}</a>
                                @endforeach
                                <p class="card-text">{{Str::limit($post->isi, 100)}}</p>
                                <div class="text-right">
                                <a href="{{URL::to('blog')}}/{{$post->slug}}" class="text-decoration-none">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links('pagination::bootstrap-4')}}
            </div>
        </div>
        @endif
    </div>
@endsection
@section('script')
    <script>
        $(function(){
            $("#btnList").click(function(){
                if($("#btnList").hasClass("btn-outline-dark")){
                    $("#btnList").removeClass("btn-outline-dark");
                    $("#btnList").addClass("btn-dark");
                    $("#btnGrid").removeClass("btn-dark");
                    $("#btnGrid").addClass("btn-outline-dark");
                }

                if($(".post").hasClass("col-md-6")){
                    $(".post").removeClass("col-md-6");
                    $(".post").removeClass("col-lg-4");
                }
            })

            $("#btnGrid").click(function(){
                if($("#btnGrid").hasClass("btn-outline-dark")){
                    $("#btnGrid").removeClass("btn-outline-dark");
                    $("#btnGrid").addClass("btn-dark");
                    $("#btnList").removeClass("btn-dark");
                    $("#btnList").addClass("btn-outline-dark");
                }

                if(!$(".post").hasClass("col-md-6")){
                    $(".post").addClass("col-md-6");
                    $(".post").addClass("col-lg-4");
                }
            })
        })
    </script>
@endsection

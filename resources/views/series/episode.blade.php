@extends('layouts.user')

@section('title')
    {{ $dataEpisode->judul }}
@endsection

@section('content')
    {{--  breadcrumbs --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb grey small">
            <li class="breadcrumb-item"><a href="{{ url("/") }}">Home</a></li>
            <li class="breadcrumb-item">
                <a href="{{ url('series/category/' .
                    $dataEpisode->series->category->slug) }}">
                    {{ $dataEpisode->series->category->nama }}
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('series/' .
                    $dataEpisode->series->slug) }}">
                    {{ Str::limit($dataEpisode->series->judul, 30, '...') }}
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ Str::limit($dataEpisode->judul, 30, '...') }}
            </li>
        </ol>
    </nav>

    {{-- video --}}
    <div class="w-100" style="margin-top:-16px;">
        <div class="container-fluid bg-dark">
            <div class="container">
                <div class="row">
                    <div class="embed-responsive embed-responsive-16by9 col-xs-12 text-center">
                        <iframe class="embed-responsive-item"
                            src="{{ $dataEpisode->url_youtube }}" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- comment section --}}
    <div class="container-fluid py-4 bg-white">
        <div class="container mb-5">
            <h1 class="h4 text-center">
                @if (count($dataEpisode->comments) > 0)
                    Comments
                @else
                    There are no comments on this episode yet.
                @endif
            </h1>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    @foreach ($dataEpisode->comments as $comment)
                        <div class="container my-5">
                            <div class="row my-5">
                                <div class="col-xs-12 col-md-2">
                                    <img class="img-fluid"
                                        src="{{ asset("/images/icon.png") }}">
                                </div>
                                <div class="col-xs-12- col-md mr-5">
                                    <p class="font-weight-bold">
                                        {{ $comment->user->nama }}
                                    </p>
                                    <p class="text-muted">
                                        <small>
                                            {{ $comment->created_at->diffForHumans() }}
                                        </small>
                                    </p>
                                    <p class="text-justify">
                                        {{ $comment->isi_komentar }}
                                    </p>

                                    <button class="btn btn-outline-primary btnViewReply">
                                        View Replies
                                    </button>
                                </div>
                            </div>

                            <div class="reply">
                                @foreach ($comment->replies as $reply)
                                    <div class="row my-5">
                                        <div class="col-xs-12- col-md ml-5">
                                            <p class="font-weight-bold">
                                                {{ $reply->user->nama }}
                                            </p>
                                            <p class="text-muted">
                                                <small>
                                                    {{ $reply->created_at->diffForHumans() }}
                                                </small>
                                            </p>
                                            <p class="text-justify">
                                                {{ $reply->isi_reply }}
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-md-2">
                                            <img class="img-fluid"
                                                src="{{ asset("/images/icon.png") }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>

                        <hr>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $(".reply").hide();

            $(".btnViewReply").click(function(){
                let replies = $(".btnViewReply").parent().parent().siblings(".reply");

                if ($(replies).is(":visible")) {
                    $(this).html("View Replies");
                    $(replies).slideUp();
                }
                else{
                    $(this).html("Hide Replies");
                    $(replies).slideDown();
                }
            });
        })
    </script>

@endsection

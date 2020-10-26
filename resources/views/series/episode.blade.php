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

    {{-- pagination --}}
    {{-- <div class="container-fluid py-4 bg-white">
        {{ $listEpisode->links() }}
    </div> --}}

    {{-- comment section --}}
    <div class="container-fluid py-4 bg-white">
        <div class="container mb-5">
            @include('layouts.alert')
            <h1 class="h3 text-center">
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
                                {{-- <div class="col-xs-12 col-md-2">
                                    <img class="img-fluid"
                                        src="{{ asset("/images/icon.png") }}">
                                </div> --}}
                                {{-- <div class="col-xs-12 col-md-2 text-center
                                    @if(Auth::user()->id == $user->id) pt-2 @else pt-5 @endif">
                                    <img src="{{$comment->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                </div> --}}
                                <div class="col-xs-12 col-md-2">
                                    <img src="{{$comment->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
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

                                    @if (count($comment->replies) > 0)
                                        <button class="btn btn-outline-primary btnViewReply">
                                            View Replies ({{ count($comment->replies) }})
                                        </button>
                                    @endif

                                    {{-- munculkan button untuk reply apabila user sudah login --}}
                                    @if (Auth::check())
                                        <button class="btn btn-outline-primary btnAddReply">
                                            <i class="fas fa-comment"></i>
                                        </button>
                                    @endif

                                    <div class="my-5 formAddReply">
                                        <h1 class="h4 mb-4">What's on your mind?</h1>
                                        <form method="POST"
                                        action="{{
                                        url("/series/". $dataEpisode->series->slug .
                                            "/episode/" . $dataEpisode->id .
                                            "/komentar/" . $comment->id .
                                            "/reply") }}">
                                            @csrf
                                            <textarea rows="3" name="comment" class="form-control my-2" value="{{ old('comment') }}" style="resize: none"></textarea>
                                            @error('comment')
                                                <p class="text-danger font-weight-bold">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                            <button type="button" class="btn btn-dark float-left btnCancel">
                                                Cancel
                                            </button>
                                            <button type="submit" class="btn btn-dark float-right">
                                                Reply
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="reply">
                                @foreach ($comment->replies as $reply)
                                    <div class="row mb-5">
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
                                            <img src="{{$reply->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                        </div>
                                        {{-- <div class="col-xs-12 col-md-2">
                                            <img class="img-fluid"
                                                src="{{ asset("/images/icon.png") }}">
                                        </div> --}}
                                        {{-- <div class="col-xs-12 col-md-2 text-center
                                            @if(Auth::user()->id == $user->id) pt-2 @else pt-5 @endif">
                                            <img src="{{$reply->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                        </div> --}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- add comment --}}
        @if (Auth::check())
            <div class="container mb-5">
                <div class="my-5">
                    <h1 class="h3 my-4">What's on your mind?</h1>
                    <form method="POST"
                    action="{{
                    url("/series/". $dataEpisode->series->slug .
                        "/episode/" . $dataEpisode->id .
                        "/komentar") }}">
                        @csrf
                        <textarea rows="5" name="comment" class="form-control my-2" value="{{ old('comment') }}" style="resize: none"></textarea>
                        @error('comment')
                            <p class="text-danger font-weight-bold">
                                {{ $message }}
                            </p>
                        @enderror
                        <button type="submit" class="btn btn-dark float-right">
                            Comment
                        </button>
                    </form>
                </div>
            </div>
        @endif
    </div>
@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $(".reply").hide();
            $(".formAddReply").hide();

            $(".btnViewReply").click(function(){
                let replies = $(this).parent().parent().siblings(".reply");

                if ($(replies).is(":visible")) {
                    // $(this).html("View Replies");
                    $(replies).slideUp();
                }
                else{
                    // $(this).html("Hide Replies");
                    $(replies).slideDown();
                }
            });

            $(".btnAddReply").click(function(){
                let form = $(this).siblings(".formAddReply");

                if ($(form).is(":visible")) {
                    $(form).slideUp();
                }
                else{
                    $(form).slideDown();
                }
            });

            $(".btnCancel").click(function(){
                let btnAddReply = $(this).parent().parent().siblings(".btnAddReply")[0];
                let form = $(this).parent().parent();

                $(form).slideUp();
            })
        })
    </script>

@endsection

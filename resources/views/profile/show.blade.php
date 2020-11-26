@extends('layouts.user')
@section('title', Auth::user()->nama)
@section('content')
    <div class="container-fluid linear">
        @if(Auth::user()->id == $user->id)
        <div class="text-right pt-3">
            <a class="btn btn-light text-decoration-none" href="{{route('settings.edit')}}"><i class="fa fa-edit"></i> Edit Profile</a>
        </div>
        @endif
        <div class="text-center @if(Auth::user()->id == $user->id) pt-2 @else pt-5 @endif">
            <img src="{{$user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
        </div>
        <h3 class="mt-2 text-light text-center">{{$user->nama}}</h3>
        <p class="text-center mt-1 mb-0 text-light">
            Member since {{\Carbon\Carbon::parse($user->created_at)->format('d F')}}
        </p>
        @if(isset($user->bekerja_sebagai) && isset($user->tempat_kerja))
        <p class="font-weight-bold text-center mt-1 mb-0 text-dark">
            {{ $user->bekerja_sebagai }} at {{$user->tempat_kerja}}
        </p>
        @endif
        @if(isset($user->sedikit_tentang_anda))
            <p class="small text-light text-center mt-1">
                {{$user->sedikit_tentang_anda}}
            </p>
        @endif
        <div class="text-center pb-5">
            @if(isset($user->url_github))
            <a href="{{$user->url_github}}" class="btn btn-outline-light mt-1"><i class="fab fa-github"></i></a>
            @endif
            @if(isset($user->url_website))
            <a href="{{$user->url_website}}" class="btn btn-outline-light mt-1"><i class="fa fa-link"></i></a>
            @endif
            @if(isset($user->url_instagram))
            <a href="{{$user->url_instagram}}" class="btn btn-outline-light mt-1"><i class="fab fa-instagram"></i></a>
            @endif
            @if(isset($user->url_facebook))
            <a href="{{$user->url_facebook}}" class="btn btn-outline-light mt-1"><i class="fab fa-facebook"></i></a>
            @endif
            @if(isset($user->url_twitter))
            <a href="{{$user->url_twitter}}" class="btn btn-outline-light mt-1"><i class="fab fa-twitter"></i></a>
            @endif
        </div>
    </div>

    {{-- comment section --}}
    <div class="container-fluid py-4 bg-white">
        <div class="container mb-5">
            @include('layouts.alert')
            <h1 class="h3 text-center">
                @if (count($user->comments) > 0)
                    {{count($user->comments)}} Comments
                @else
                    You haven't comment yet.
                @endif
            </h1>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    @foreach ($user->comments as $comment)
                        <div class="container my-5">
                            <div class="row my-5">
                                <a class="text-decoration-none" href="{{route('series.episode', [
                                    'slug' => $comment->episode->series->slug,
                                    'slugepisode' => $comment->episode->slug
                                    ])}}" class="col-12">
                                    <h5>{{$comment->episode->series->judul}}</h5>
                                    <p class="text-muted">{{$comment->episode->judul}}</p>
                                </a>
                            </div>
                            <div class="row my-3">
                                <div class="flex-shrink-0 mr-3">
                                    <img src="{{$comment->user->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                </div>
                                <div class="col mr-5">
                                    <p class="font-weight-bold">
                                        @if ($comment->row_id_user <= 0)
                                            Squee Course
                                        @else
                                            {{ $comment->user->nama }}
                                        @endif
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
                                        <button class="btn btn-outline-primary btnViewReply mb-4">
                                            View Replies ({{ count($comment->replies) }})
                                        </button>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="row my-3">
                                <div class="col-xs-12 col-md-2">
                                    <img src="{{$comment->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                </div>
                                <div class="col-xs-12 col-md mr-5">
                                    <p class="font-weight-bold">
                                        @if ($comment->row_id_user <= 0)
                                            Squee Course
                                        @else
                                            {{ $comment->user->nama }}
                                        @endif
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
                                        <button class="btn btn-outline-primary btnViewReply mb-4">
                                            View Replies ({{ count($comment->replies) }})
                                        </button>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="reply" style="padding-left: 2%">
                                @foreach ($comment->replies as $reply)
                                    @include('layouts.episode.layout-data-reply')
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    {{-- <div class="container-fluid py-4 bg-white">
        <div class="container mb-5">
            <h1 class="h4 text-center">
                @if (count($user->comments) > 0)
                    {{count($user->comments)}} Comments
                @else
                    You haven't comment yet.
                @endif
            </h1>
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    @foreach ($user->comments as $comment)
                        <div class="container my-5">
                            <div class="row my-5">
                                <a class="text-decoration-none" href="{{route('series.episode', [
                                    'slug' => $comment->episode->series->slug,
                                    'id' => $comment->episode->id
                                    ])}}" class="col-12">
                                    <h5>{{$comment->episode->series->judul}}</h5>
                                    <p class="text-muted">{{$comment->episode->judul}}</p>
                                </a>
                            </div>
                            <div class="row my-3">
                                <div class="col-xs-12 col-md-2">
                                    <img class="img-fluid"
                                        src="{{ $comment->user->gravatar() }}">
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
                                            <img class="img-fluid"
                                                src="{{ $reply->user->gravatar() }}">
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
    </div> --}}
@endsection

@section('script')
<script>
    // $(document).ready(function(){
    //     $(".reply").hide();

    //     $(".btnViewReply").click(function(){
    //         let replies = $(".btnViewReply").parent().parent().siblings(".reply");

    //         if ($(replies).is(":visible")) {
    //             $(this).html("View Replies");
    //             $(replies).slideUp();
    //         }
    //         else{
    //             $(this).html("Hide Replies");
    //             $(replies).slideDown();
    //         }
    //     });
    // })

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
</script>
@endsection

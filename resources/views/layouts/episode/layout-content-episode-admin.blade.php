<div class="container-fluid py-3">
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
                                    {{-- cek apakah komentar dilakukan admin / user --}}
                                    @if ($comment->row_id_user == null)
                                        <img src="{{ asset("/images/icon.png") }}"
                                        alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                    @else
                                        <img src="{{$comment->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
                                    @endif

                                </div>
                                <div class="col-xs-12 col-md mr-5">
                                    @include('layouts.episode.layout-data-comment-admin')
                                </div>
                            </div>

                            <div class="reply">
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

        {{-- add comment --}}
        @if (session()->has("admin"))
            <div class="container mb-5">
                <div class="my-5">
                    <h1 class="h3 my-4">What's on your mind?</h1>
                    <form method="POST"
                    action="{{
                    url("/admin/series/". $dataEpisode->series->slug .
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

</div>

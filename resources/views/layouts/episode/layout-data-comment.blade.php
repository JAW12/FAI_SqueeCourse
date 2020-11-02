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

{{-- munculkan button untuk reply apabila user sudah login --}}
@if (Auth::check() || session()->has("admin"))
    <button class="btn btn-outline-primary btnAddReply mb-4">
        <i class="fas fa-comment"></i>
    </button>
@endif

<div class="formAddReply">
    <h1 class="h4 mb-4">What's on your mind?</h1>
    <form method="POST"
    action="{{
    url("/series/". $dataEpisode->series->slug .
        "/episode/" . $dataEpisode->slug .
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

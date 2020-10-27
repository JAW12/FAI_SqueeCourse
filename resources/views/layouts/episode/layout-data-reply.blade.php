<div class="row mb-5">
    <div class="col-xs-12 col-md ml-5">
        <p class="font-weight-bold">
            @if ($reply->row_id_user == null)
                Squee Course
            @else
                {{ $reply->user->nama }}
            @endif
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
        @if ($reply->row_id_user == null)
            <img src="{{ asset("/images/icon.png") }}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
        @else
            <img src="{{$reply->user->gravatar()}}" alt="" height="150" width="150" class="rounded-circle" style="object-fit: cover; object-position: center;">
        @endif

    </div>
</div>

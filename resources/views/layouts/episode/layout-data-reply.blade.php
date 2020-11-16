<div class="row mb-5">
    <div class="flex-shrink-0 mr-3">
        @if ($reply->row_id_user == null)
            <img src="{{ asset("/images/icon.png") }}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
        @else
            <img src="{{$reply->user->gravatar()}}" alt="" height="50" width="50" class="rounded-circle" style="object-fit: cover; object-position: center;">
        @endif
    </div>
    <div class="col">
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

</div>

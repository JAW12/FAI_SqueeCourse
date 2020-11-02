<div class="col-12 col-md-6 col-lg-4 mt-3 my-3">
    <div class="card h-100" style="height: 20rem;">
        <img class="card-img-top" src="{{ (strpos($series->url_foto_banner, "https://") === false) ? asset("/storage/images/".$series->url_foto_banner) : $series->url_foto_banner }}" alt="Card image cap">
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
                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-dark">
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
            @yield('extra-note')
        </div>
    </div>
</div>

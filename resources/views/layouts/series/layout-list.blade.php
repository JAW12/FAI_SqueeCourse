<div class="container-fluid grey py-4">
    <div class="container">
        <div class="row no-gutters shadow">
            <div class="col-12 col-md-6 shadow"
                style="background-image: url('{{
                strpos($dataSeriesHeader->url_foto_banner, "https://") === false ?
                asset("storage/images/$d->gambar") :
                $dataSeriesHeader->url_foto_banner }}'); background-size: cover;  background-position: center;">
            </div>
            <div class="col-12 col-md-6 bg-light">
                <div class="p-4">
                    <h6 class="text-secondary">Latest</h6>
                    <h2 style="width:90%">
                        <a class="text-dark text-decoration-none"
                            href="{{ url('series/' . $dataSeriesHeader->slug) }}">
                            {{ Str::limit($dataSeriesHeader->judul, 25, '...') }}
                        </a>
                    </h2>
                    <p class="mt-3">
                        {{ $dataSeriesHeader->deskripsi }}
                    </p>
                    <div class="mt-5 d-inline-flex">
                        <h6 class="text-secondary"><i class="fa fa-film"></i>
                            {{ count($dataSeriesHeader->episodes) }} Episodes
                        </h6>
                        <h6 class="text-secondary ml-4">
                            <i class="fa fa-filter"></i>
                            <a class="text-secondary text-decoration-none" href="{{
                            url('series/category/' . $dataSeriesHeader->category->slug) }}">
                                {{ $dataSeriesHeader->category->nama }}
                            </a>
                        </h6>
                        <h6 class="text-secondary ml-4">
                            <i class="fa fa-level-up"></i>
                            @if ($dataSeriesHeader->tingkat_kesulitan === 1)
                                Beginner
                            @elseif ($dataSeriesHeader->tingkat_kesulitan === 2)
                                Intermediate
                            @elseif ($dataSeriesHeader->tingkat_kesulitan === 3)
                                Advanced
                            @endif
                        </h6>
                    </div>
                    <hr>
                    <h6 class="text-secondary mb-3"><i class="fa fa-tags"></i>Tags</h6>
                    <div class="d-inline-flex">
                        @if (count($dataSeriesHeader->labels) > 0)
                            @foreach ($dataSeriesHeader->labels as $label)
                                <a class="btn btn-primary mr-2" href="{{
                                 url('series/label/' . $label->slug)}}">
                                    {{ $label->nama }}
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">
                    Most Popular Series
                </h3>
                <h5 class="font-weight-light">
                    These are the most popular series of all time.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesPopular as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Newest Series</h3>
                <h5 class="font-weight-light">These are newest series released.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesNewest as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Just Updated</h3>
                <h5 class="font-weight-light">Are you curious what are the things just updated on SqueeCourse? <br> These are the series that has just been updated.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesJustUpdated as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Completed Series</h3>
                <h5 class="font-weight-light">These are series that has been completed, that you won't need to wait the next upcoming videos for each series.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesCompleted as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Series On Progress</h3>
                <h5 class="font-weight-light">These are series that you may like, but still in progress.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesOnProgress as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Learn From Zero</h3>
                <h5 class="font-weight-light">Learn all of those from zero is the most right way to learn any language or new framework.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                @foreach ($dataSeriesLearnFromZero as $series)
                    <div class="card" style="height: 30rem;">
                        <img class="card-img-top"
                            src="{{ $series->url_foto_banner }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title mb-1" style="height: 3rem;">
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
                                {{ url('series/label/' . $label->slug) }}" class="badge badge-pill badge-primary">
                                    {{ $label->nama }}
                                </a>
                            @endforeach

                            <p class="card-text mt-3" style="height: 6.5rem;">
                                {{ Str::limit($series->deskripsi, 130, '...') }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">
                                    Last updated
                                    {{ $series->updated_at->diffForHumans() }}
                                </small>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

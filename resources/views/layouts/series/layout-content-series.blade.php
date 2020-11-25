<div class="w-100" id="header" style="margin-top:-16px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div style="margin-top: 15%">
                    <div class="d-inline-flex mb-3">
                        <h5>
                            <a class="badge badge-pill badge-light mr-2"
                            href="{{ url('/series/category/' . $dataSeries->category->slug) }}">
                                {{ $dataSeries->category->nama }}
                            </a>
                        </h5>
                        <h5>
                            @foreach ($dataSeries->labels as $label)
                                <a href="{{ url('/series/label/' . $label->slug) }}" class="badge badge-pill badge-light">
                                    {{ $label->nama }}
                                </a>
                            @endforeach
                        </h5>
                    </div>
                    <h3 class="text-light font-weight-bolder">
                        {{ Str::limit($dataSeries->judul, 45, '...') }}
                    </h3>
                    <p class="text-light lead mt-0 font-weight-normal">
                        {{ Str::limit($dataSeries->deskripsi, 255, '...') }}
                    </p>
                    @if (count($dataSeries->episodes) > 0)
                        <a class="btn btn-dark btn-lg bt-5"
                            href="{{ url('series/' . $dataSeries->slug . '/episode/' .
                                $dataSeries->episodes->first()->slug) }}">
                            <i class="fa fa-play-circle mr-2"></i>Start
                        </a>
                    @endif
                    @if (Auth::check())
                        <a class="btn bg-light text-dark btn-lg bt-5"
                            href="{{ url('series/' . $dataSeries->slug . '/watchlist') }}">

                            @if (! isset($isSaved) || $isSaved == false)
                                <i class="far fa-bookmark mr-2"></i></i>Watch Later
                            @else
                                <i class="fas fa-bookmark mr-2"></i>Remove From Watch Later
                            @endif
                        </a>
                    @endif
                    <div class="mt-5 text-light">
                        <div class="row">
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-clock-o mr-2"></i>
                                {{ round($dataSeries->total_durasi / 60) }}
                                minutes
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-film mr-2"></i>
                                {{ count($dataSeries->episodes) }}
                                episodes
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fas fa-level-up-alt mr-2"></i>
                                @if ($dataSeries->tingkat_kesulitan == 1)
                                    Beginner
                                @elseif ($dataSeries->tingkat_kesulitan == 2)
                                    Intermediate
                                @elseif ($dataSeries->tingkat_kesulitan == 3)
                                    Advanced
                                @endif
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fas fa-money-check-alt mr-2"></i>
                                @if ($dataSeries->status_berbayar == 0)
                                    Free Series
                                @elseif ($dataSeries->status_berbayar == 1)
                                    Premium
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- list episode --}}
<div class="container-fluid grey py-4">
    <div class="container mb-5">
        <div class="row">
            @if (count($dataSeries->episodes) <= 0)
                <div class="col-12">
                    <p>
                        <h1 class="h3 text-center">
                            This series doesn't have any episodes yet.
                        </h1>
                    </p>
                </div>
            @else
                <div class="col-xs-12 col-md-6">
                    <div class="list-group shadow-sm">
                        <p class="list-group-item list-group-item-action mb-0 disabled"><i class="fa fa-exclamation-circle text-danger mr-2"></i><b>
                            @if ($dataSeries->status_complete == 0)
                                Series on progress
                            @elseif ($dataSeries->status_complete == 1)
                                Completed Series
                            @endif
                        </b></p>
                        @foreach ($dataSeries->episodes as $episode)
                            <a href="{{
                            url('series/' . $dataSeries->slug . '/episode/' . $episode->slug) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <h1><i class="fa fa-play-circle"></i></h1>
                                    <div class="ml-3">
                                        <h5>
                                            {{ $episode->judul }}
                                        </h5>
                                        <p class="text-muted mb-0">
                                            Episode {{ $loop->iteration }}
                                        </p>
                                    </div>
                                    <div class="ml-auto my-auto">
                                        <p>
                                            {{ gmdate('i:s', $episode->durasi) }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div> @if (count($dataQuiz) > 0)
                    @foreach ($dataQuiz as $rowquiz)
                        <a href="{{
                            url('series/' . $dataSeries->slug . '/quiz') }}" class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <h1><i class="fa fa-play-circle"></i></h1>
                                    <div class="ml-3">
                                        <h5>
                                            {{ $rowquiz->nama }}
                                        </h5>

                                    </div>

                                </div>
                            </a>
                    @endforeach
                @endif
                </div>

            @endif
        </div>
    </div>
</div>

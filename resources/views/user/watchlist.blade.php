@extends('layouts.user')

@section('title')
    Watch List
@endsection

@section('content')
    <div class="container py-3">
        <div class="col-12 mt-2 pb-3 border-bottom border-dark d-flex justify-content-between">
            <div>
                <h1>Watch List</h1>
                <div class="text-muted mt-3">
                    {{ count($dataWatchlist) }} series found in your watch list
                </div>
            </div>
        </div>
        <div class="row">
            @if (count($dataWatchlist) <= 0)
                <div class="col-12">
                    <h5 class="text-center my-4">
                        You don't have watch list.
                        <span class="text-primary">
                            <a href="{{ url("/series") }}" class="text-decoration-none">
                                Start exploring now.
                            </a>
                        </span>
                    </h5>
                </div>
            @else
                @foreach ($dataWatchlist as $series)
                    @include('layouts.series.layout-card-series-watchlist')
                @endforeach
            @endif
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $dataWatchlist->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

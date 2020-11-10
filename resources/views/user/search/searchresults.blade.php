@extends('layouts.user')

@section('title')
    Watch List
@endsection

@section('content')
    <div class="container py-3">
        <div class="col-12 mt-2 pb-3 border-bottom border-dark d-flex justify-content-between">
            <div>
                <h1>
                    @if ($keyword == "")
                        All Series
                    @else
                        Series' title contains '{{ $keyword }}'
                    @endif
                </h1>
                <div class="text-muted mt-3">
                    {{ count($dataSeries) }} series found in your search results.
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($dataSeries as $series)
                @include('layouts.series.layout-card-series-simple')
            @endforeach
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $dataSeries->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

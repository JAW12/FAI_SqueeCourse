@extends('layouts.series.layout-card-series-simple')

@section('extra-note')
    <p class="card-text mt-2 text-right">
        <small class="text-dark">
            Added {{ $series->added_at->diffForHumans() }}
        </small>
    </p>
@endsection

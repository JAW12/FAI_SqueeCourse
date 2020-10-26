@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        @include('layouts.alert')
        <div class="container-fluid">
            <a class="btn btn-dark float-right">
                Add Series
            </a>
        </div>
        <h1 class="display-4 text-center my-4">
            Displayed Series
        </h1>
        <div class="container">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Title</th>
                    <th>Series Type</th>
                    <th>Completion Status</th>
                    <th>Difficulty</th>
                    <th>Last Updated At</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if (count($dataSeries) <= 0)
                        <tr>
                            <td class="text-center" colspan="7">
                                There are no series available.
                            </td>
                        </tr>
                    @else
                        @foreach ($dataSeries as $series)
                            @include('admin.series.layouts.layout-row-series')
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    <div class="container py-3 mb-5">
        <h1 class="display-4 text-center my-4">
            Deleted Series
        </h1>
        <div class="container">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <th>#</th>
                    <th>Title</th>
                    <th>Series Type</th>
                    <th>Completion Status</th>
                    <th>Difficulty</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if (count($dataSeriesDeleted) <= 0)
                        <tr>
                            <td class="text-center" colspan="7">
                                You haven't deleted any series yet.
                            </td>
                        </tr>
                    @else
                        @foreach ($dataSeriesDeleted as $series)
                            @include('admin.series.layouts.layout-row-series')
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

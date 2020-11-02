@extends('layouts.admin')

@section('title')
    List Series
@endsection

@section('content')
    <div class="container py-5">
        <div class="my-2">
            @include('layouts.alert')
        </div>
        <div class="container-fluid text-right">
            <a class="btn btn-dark" href="{{ route("admin.series.add") }}">
                Add Series
            </a>
        </div>
        <div class="container-fluid">
            <h1 class="h1 text-center my-4">
                Squee Course Series
            </h1>
            <p class="text-primary font-italic font-weight-bold">
                *) Click row to view series detail
            </p>
        </div>
        <div class="container">
            <table class="table table-bordered table-light table-hover dt">
                <thead class="thead-dark align-middle">
                    <th class="align-middle text-center">#</th>
                    <th class="align-middle text-center">Title</th>
                    <th class="align-middle text-center">Series Type</th>
                    <th class="align-middle text-center">Completion Status</th>
                    <th class="align-middle text-center">Difficulty</th>
                    <th class="align-middle text-center">Last Updated At</th>
                    <th class="align-middle text-center">Displayed Status</th>
                    <th class="align-middle text-center">Action</th>
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
                            @include('layouts.series.layout-row-series')
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.dt').DataTable();
            // $('.dt').DataTable({
            //         "order": [[ 2, "asc" ]]
            //     }
            // );
        });

        $(document).on("click", ".click-col", function(){
            window.open($(this).parent().attr("data-href"))
        });
    </script>
@endsection

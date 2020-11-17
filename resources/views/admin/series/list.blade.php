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
        <div class="container table-responsive">
            <table class="table table-bordered table-light table-hover dt">
                <thead class="thead-dark align-middle">
                    {{-- <th class="align-middle text-center">#</th> --}}
                    <th class="align-middle text-center">Title</th>
                    <th class="align-middle text-center">Type</th>
                    <th class="align-middle text-center">Completion Status</th>
                    <th class="align-middle text-center">Difficulty</th>
                    {{-- <th class="align-middle text-center">Last Updated At</th> --}}
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
                <tfoot>
                    <tr>
                        <th class="align-middle text-center">Title</th>
                        <th class="align-middle text-center">Series Type</th>
                        <th class="align-middle text-center">Completion Status</th>
                        <th class="align-middle text-center">Difficulty</th>
                        {{-- <th class="align-middle text-center">Last Updated At</th> --}}
                        <th class="align-middle text-center">Displayed Status</th>
                        {{-- <th class="align-middle text-center">Action</th> --}}
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    {{-- Modal --}}
    <div class="modal fade" id="modalConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">
                        Modal title
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalBody">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                    <form method="POST">
                        @csrf
                        <button type="submit" class="btn" id="btnAction" formaction="#">
                            Save changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function setModalMode(mode, action){
            if (mode == "restore") {
                $("#modalTitle").html('Restore Deleted Series')

                $("#btnAction").html('Restore');
                $("#btnAction").addClass('btn-success');
            }
            else if(mode == "delete"){
                $("#modalTitle").html('Delete Series')

                $("#btnAction").html('Delete');
                $("#btnAction").addClass('btn-danger');
            }

            $("#modalBody").html('Are you sure you want to '
                    + mode + ' series?');
            $("#btnAction").attr('formaction', action);
            $("#modalConfirmation").modal('show');
        }

        $(document).ready(function(){
            $('.dt').DataTable({
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });
            // $('.dt').DataTable({
            //         "order": [[ 2, "asc" ]]
            //     }
            // );
        });

        $(document).on("click", ".click-col", function(){
            window.open($(this).parent().attr("data-href"))
        });

        $(document).on('click', ".btnDelete", function(){
            console.log(this);
            let action = $(this).attr('formaction');
            let mode = $(this).attr("mode");
            setModalMode(mode, action);
        })

        $(document).on('click', ".btnRestore", function(){
            console.log(this);
            let action = $(this).attr('formaction');
            let mode = $(this).attr("mode");
            setModalMode(mode, action);
        })
    </script>
@endsection

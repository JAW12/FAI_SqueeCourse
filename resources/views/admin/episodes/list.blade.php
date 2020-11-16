@extends('layouts.admin')

@section('title')
    List Episodes
@endsection

@section('content')
    <div class="container py-5">
        <div class="my-2">
            @include('layouts.alert')
        </div>
        <div class="container-fluid text-right">
            <a class="btn btn-dark" href="{{ route("admin.episode.add") }}">
                Add Episode
            </a>
        </div>
        <div class="container-fluid">
            <h1 class="h1 text-center my-4">
                Squee Course Episodes
            </h1>
            <p class="text-primary font-italic font-weight-bold">
                *) Click row to view episodes detail
            </p>
        </div>
        <div class="container-fluid table-responsive">
            <table class="table table-bordered table-light table-hover compact dt">
                <thead class="thead-dark align-middle">
                    {{-- <th class="align-middle text-center">#</th> --}}
                    <th class="align-middle text-center">Series</th>
                    <th class="align-middle text-center">Title</th>
                    <th class="align-middle text-center">Type</th>
                    <th class="align-middle text-center">Durasi</th>
                    {{-- <th class="align-middle text-center">Last Updated At</th> --}}
                    <th class="align-middle text-center">Displayed Status</th>
                    <th class="align-middle text-center">Action</th>
                </thead>
                <tbody>
                    @if (count($dataEpisodes) <= 0)
                        <tr>
                            <td class="text-center" colspan="7">
                                There are no episodes available.
                            </td>
                        </tr>
                    @else
                        @foreach ($dataEpisodes as $episode)
                            @php
                                $series = $episode->series;
                            @endphp
                            @include('layouts.episode.layout-row-episode')
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th>Series</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Durasi</th>
                        {{-- <th>Last Updated At</th> --}}
                        <th>Displayed Status</th>
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
                        <button type="submit" class="btn" id="btnAction"
                            formaction="#">
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
                $("#modalTitle").html('Restore Deleted Episode')

                $("#btnAction").html('Restore');
                $("#btnAction").addClass('btn-success');
            }
            else if(mode == "delete"){
                $("#modalTitle").html('Delete Episode')

                $("#btnAction").html('Delete');
                $("#btnAction").addClass('btn-danger');
            }

            $("#modalBody").html('Are you sure you want to '
                    + mode + ' episode?');
            $("#btnAction").attr('formaction', action);
            $("#modalConfirmation").modal('show');
        }

        $(document).ready(function(){
            $('.dt').DataTable({
                initComplete: function () {
                    responsive:true,
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

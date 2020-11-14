@extends('layouts.admin')
@section('content')
<div class="container">
    <table class="table table-hover table-striped table-bordered-circle rounded-circle" >
        <thead>
        <tr>

            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datauser as $rowpost)
        <tr>
            <td>{{$rowpost->username}}</td>
            <td>{{$rowpost->email}}</td>
            <td>{{$rowpost->nama}}</td>
            <td>
                <a href="{{URL::to('admin/member')}}/{{$rowpost->username}}"> <button type="button" class="btn btn-info" style="width: 75px;">Detail</button></a>
                @if($rowpost->banned == 0)
                    <button type="button" class="btn btn-danger mx-2 my-2 btnBan"
                        formaction="{{route('member.ban', $rowpost->username)}}" mode="ban">
                        Ban
                    </button>
                @elseif($rowpost->banned == 1)
                    <button type="button" class="btn btn-success mx-2 my-2 btnUnban"
                    formaction="{{route('member.unban', $rowpost->username)}}" mode="unban">
                        Unban
                    </button>
                @endif
            <td>
        </tr>
        @endforeach
        </tbody>
    </table>
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
            if (mode == "unban") {
                $("#modalTitle").html('Unban User')

                $("#btnAction").html('Unban');
                $("#btnAction").addClass('btn-success');
            }
            else if(mode == "ban"){
                $("#modalTitle").html('Ban User')

                $("#btnAction").html('Ban');
                $("#btnAction").addClass('btn-danger');
            }

            $("#modalBody").html('Are you sure you want to '
                    + mode + ' user?');
            $("#btnAction").attr('formaction', action);
            $("#modalConfirmation").modal('show');
        }

        $(document).on('click', ".btnBan", function(){
            console.log(this);
            let action = $(this).attr('formaction');
            let mode = $(this).attr("mode");
            setModalMode(mode, action);
        })

        $(document).on('click', ".btnUnban", function(){
            console.log(this);
            let action = $(this).attr('formaction');
            let mode = $(this).attr("mode");
            setModalMode(mode, action);
        })
    </script>
@endsection

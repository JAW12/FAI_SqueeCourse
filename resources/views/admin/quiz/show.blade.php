@extends('layouts.admin')
@section('title')
    Edit Quiz
@endsection
@section('content')
<div class="container my-5">
    <form class="mt-4" method="post">
    @csrf
    @if (count($data) > 0)
    @foreach ($namajudul as $rowjudul)
    <div class="form-group my-4">
        <label>Title</label>
        <input type='hidden'name='id' value="{{$rowjudul->id}}">
        <input type="text" disabled name="judul" value="{{$rowjudul->nama}}" class="form-control my-2" placeholder="Learn Laravel 8">
    </div>
    @endforeach
    <div class="form-group my-4">
        <label>Series</label>
        <select name="series" disabled required class="form-control">
            @foreach ($data as $rowdata)
                <option value="{{ $rowdata->id }}">
                    {{ $rowdata->judul }}
                </option>
            @endforeach
        </select>
    </div>   
    @php
        $tempcheck=0;
    @endphp
    @foreach ($pertnyaan as $rowsoal)
    @php
        $tempcheck= $tempcheck+1;
    @endphp
        <div class="form-group my-4">
            <label>Question {{$tempcheck}}</label>
            <input type="text"disabled name='soal{{$tempcheck}}'value='{{$rowsoal->pertanyaan}}'required class="form-control my-2" placeholder="Question">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" disabled class="form-control" value='{{$rowsoal->pilihan_a}}'name='pilihan{{$tempcheck}}a' placeholder="Pilihan A" aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text"disabled  class="form-control" placeholder="Pilihan B" value='{{$rowsoal->pilihan_b}}'name='pilihan{{$tempcheck}}b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" disabled class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihan{{$tempcheck}}c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text"disabled class="form-control" placeholder="Pilihan D" name='pilihan{{$tempcheck}}d' value='{{$rowsoal->pilihan_d}}'aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Answer</label>
        </div>
        <select class="custom-select" disabled name='jawaban{{$tempcheck}}' id="jawaban{{$tempcheck}}" placeholder="Choose categories">
            @if($rowsoal->kunci_jawaban=="A")
            <option value="A"selected>A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            @elseif($rowsoal->kunci_jawaban=="B")
            <option value="A">A</option>
            <option value="B"selected>B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            @elseif($rowsoal->kunci_jawaban=="C")
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C"selected>C</option>
            <option value="D">D</option>
            @elseif($rowsoal->kunci_jawaban=="D")
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D"selected>D</option>
            @endif
        </select>
       
        </div>
       
    @endforeach
        <button type="button"  mode="delete"  class="btn btn-danger btnDelete"
        formaction="{{ url("/admin/quiz/" . $rowjudul->id ."/delete")}}"  style="width: 75px;">Delete
        </button>
    @else
        <div class="h3 text-center mr-5 mt-5">No Series Complete</div>
    @endif
    </form>
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
                <form method="post">
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
            if(mode == "delete"){
                $("#modalTitle").html('Delete Quiz')

                $("#btnAction").html('Delete');
                $("#btnAction").addClass('btn-danger');
            }
            $("#modalBody").html('Are you sure you want to '
                    + mode + ' Quiz?');
            $("#btnAction").attr('formaction', action);
            $("#modalConfirmation").modal('show');
        }
        $(document).on('click', ".btnDelete", function(){
            console.log(this);
            let action = $(this).attr('formaction');
            let mode = $(this).attr("mode");
            setModalMode(mode, action);
        })

    </script>
@endsection

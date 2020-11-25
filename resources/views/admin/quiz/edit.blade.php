@extends('layouts.admin')
@section('title')
    Edit Quiz
@endsection
@section('content')
<div class="container my-5">
    <form class="mt-4" method="post">
    @csrf
    @if (count($data) > 0)
    <input type='hidden'name='temp'value='{{count($data)}}'>
    @foreach ($namajudul as $rowjudul)
    <div class="form-group my-4">
        <label>Title</label>
        <input type='hidden'name='id' value="{{$rowjudul->id}}">
        <input type="text" name="judul" value="{{$rowjudul->nama}}" class="form-control my-2" placeholder="Learn Laravel 8">
    </div>
    @endforeach
    <div class="form-group my-4">
        <label>Series</label>
        <select name="series" required class="form-control">
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
            <label>Soal {{$tempcheck}}</label>
            <input type="text" name='soal{{$tempcheck}}'value='{{$rowsoal->pertanyaan}}'required class="form-control my-2" placeholder="Soal">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" value='{{$rowsoal->pilihan_a}}'name='pilihana{{$tempcheck}}' placeholder="Pilihan A" aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" value='{{$rowsoal->pilihan_b}}'name='pilihanb{{$tempcheck}}' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihanc{{$tempcheck}}' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihand{{$tempcheck}}' value='{{$rowsoal->pilihan_d}}'aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Jawaban</label>
        </div>
        <select class="custom-select" name='jawaban{{$tempcheck}}' id="jawaban{{$tempcheck}}" placeholder="Choose categories">
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
    <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnupdate"value="Update" >
    @else
        <div class="h3 text-center mr-5 mt-5">No Series Complete</div>
    @endif
    </form>
</div>
  
@endsection
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
    @if($tempcheck==1)
        <div class="form-group my-4">
            <label>Soal 1</label>
            <input type="text" name="soal1" value='{{$rowsoal->pertanyaan}}'required class="form-control my-2" placeholder="Soal">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" value='{{$rowsoal->pilihan_a}}'placeholder="Pilihan A" name='pilihan1a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" value='{{$rowsoal->pilihan_b}}'name='pilihan1b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihan1c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihan1d' value='{{$rowsoal->pilihan_d}}'aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 1</label>
        <input type="text" name="jawaban1" required class="form-control my-2" value='{{$rowsoal->kunci_jawaban}}'placeholder="A/B/C/D">
    </div>
    @elseif($tempcheck==2)
    <div class="form-group my-4">
        <label>Soal 2</label>
        <input type="text" name="soal2" required class="form-control my-2"  value='{{$rowsoal->pertanyaan}}'placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A"value='{{$rowsoal->pilihan_a}}' name='pilihan2a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B"value='{{$rowsoal->pilihan_b}}' name='pilihan2b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihan2c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" value='{{$rowsoal->pilihan_d}}'name='pilihan2d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 2</label>
        <input type="text" name="jawaban2" required class="form-control my-2" value='{{$rowsoal->kunci_jawaban}}'placeholder="A/B/C/D">
    </div>
    @elseif($tempcheck==3)
    <div class="form-group my-4">
        <label>Soal 3</label>
        <input type="text" name="soal3" value='{{$rowsoal->pertanyaan}}' required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A"value='{{$rowsoal->pilihan_a}}' name='pilihan3a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" value='{{$rowsoal->pilihan_b}}'name='pilihan3b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihan3c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" value='{{$rowsoal->pilihan_d}}'name='pilihan3d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 3</label>
        <input type="text" name="jawaban3" value='{{$rowsoal->kunci_jawaban}}'required class="form-control my-2" placeholder="A/B/C/D">
    </div>
    @else
    <div class="form-group my-4">
        <label>Soal 4</label>
        <input type="text" name="soal3" value='{{$rowsoal->pertanyaan}}' required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A"value='{{$rowsoal->pilihan_a}}' name='pilihan4a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" value='{{$rowsoal->pilihan_b}}'name='pilihan4b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" value='{{$rowsoal->pilihan_c}}'name='pilihan4c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" value='{{$rowsoal->pilihan_d}}'name='pilihan4d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 4</label>
        <input type="text" name="jawaban4" value='{{$rowsoal->kunci_jawaban}}'required class="form-control my-2" placeholder="A/B/C/D">
    </div>
    @endif
    @endforeach
    <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnupdate"value="Update" >
    @else
        <div class="h3 text-center mr-5 mt-5">No Series Complete</div>
    @endif
    </form>
</div>
  
@endsection
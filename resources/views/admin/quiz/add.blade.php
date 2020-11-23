@extends('layouts.admin')
@section('title')
    Add Quiz
@endsection
@section('content')
<div class="container my-5">
    <form class="mt-4" method="post">
    @csrf
    @if (count($data) > 0)
    <div class="form-group my-4">
        <label>Title</label>
        <input type="text" name="judul" required class="form-control my-2" placeholder="Learn Laravel 8">
    </div>
  
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
    <div class="form-group my-4">
        <label>Soal 1</label>
        <input type="text" name="soal1" required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A" name='pilihan1a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" name='pilihan1b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" name='pilihan1c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihan1d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 1</label>
        <input type="text" name="jawaban1" required class="form-control my-2" placeholder="A/B/C/D">
    </div>

    <div class="form-group my-4">
        <label>Soal 2</label>
        <input type="text" name="soal2" required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A" name='pilihan2a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" name='pilihan2b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" name='pilihan2c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihan2d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 2</label>
        <input type="text" name="jawaban2" required class="form-control my-2" placeholder="A/B/C/D">
    </div>

    <div class="form-group my-4">
        <label>Soal 3</label>
        <input type="text" name="soal3" required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A" name='pilihan3a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" name='pilihan3b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" name='pilihan3c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihan3d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 3</label>
        <input type="text" name="jawaban3" required class="form-control my-2" placeholder="A/B/C/D">
    </div>

    <div class="form-group my-4">
        <label>Soal 4</label>
        <input type="text" name="soal4" required class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan A" name='pilihan4a' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan B" name='pilihan4b' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan C" name='pilihan4c' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
            </div>
            <input type="text" class="form-control" placeholder="Pilihan D" name='pilihan4d' aria-label="Judul" aria-describedby="Judul">
        </div>
        <div class="form-group my-4">
        <label>Jawaban Nomor 4</label>
        <input type="text" name="jawaban4" required class="form-control my-2" placeholder="A/B/C/D">
    </div>
    <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnadd"value="Add" >
    @else
        <div class="h3 text-center mr-5 mt-5">No Series Complete</div>
    @endif
    </form>
</div>
  
@endsection
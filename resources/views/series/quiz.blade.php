@extends('layouts.user')
@section('title')
    Quiz
@endsection
@section('content')
<div class="container my-5">
        @include('layouts.alert')
        <h1 class="h1 text-center">Quiz</h1>
        @php
            $tempno=0;
        @endphp
       
        <form method="POST">
            @foreach($datapertanyaan as $rowpertanyaan)
            @csrf
            <input type='hidden' name='temp' value='{{count($datapertanyaan)}}'>
            <input type='hidden'name='tempidkuis'value="{{$rowpertanyaan->row_id_kuis}}">
            <div class="form-group my-4">
                <label>Pertanyaan</label>
                <h1 class="font-weight-bolder">{{$rowpertanyaan->pertanyaan}}</h1>
                <input type="hidden" name='soal{{$tempno}}' disabled value="{{ $rowpertanyaan->pertanyaan }}" placeholder="Let's start learning">
            </div>  
                <div class="input-group my-2">
                <input type='hidden' name='tempida{{$tempno}}' value="{{$rowpertanyaan->id}}">
                    <div class="input-group-prepend">
                    <label>A</label>
                        <div class="input-group-text">

                        <input type="radio" name='pilihan{{$tempno}}' value='A'>{{$rowpertanyaan->pilihan_a}}
                        </div>
                    </div>
                </div>
                <div class="input-group my-2">
                <label>B</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name='pilihan{{$tempno}}' value='B'>{{$rowpertanyaan->pilihan_b}}
                        </div>
                    </div>
                </div>
                <div class="input-group my-2">
                <label>C</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                        <input type="radio" name='pilihan{{$tempno}}' value='C'>{{$rowpertanyaan->pilihan_c}}
                        </div>
                    </div>
                </div>
                <div class="input-group my-2">
                <label>D</label>
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                    <input type="radio" name='pilihan{{$tempno}}' value='D'>{{$rowpertanyaan->pilihan_d}}
                       </div>
                    </div>
                </div>
            <input type='hidden'name='jawaban{{$tempno}}' value={{$rowpertanyaan->kunci_jawaban}}>
            @php
                $tempno= $tempno+1;
            @endphp
          
            @endforeach
            <button type="submit" class="btn btn-dark w-100 mb-4 float-right" value="Submit">
               Submit
            </button>
        </form>
    </div>
    @endsection
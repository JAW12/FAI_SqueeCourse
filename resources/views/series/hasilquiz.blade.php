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
            @foreach($datahkuis as $rowhkuis)
                <div class="form-group my-4">
                <h1 class="font-weight-bolder">Nilai {{$rowhkuis->nilai}}</h1>
                </div>
            @endforeach
            @foreach($datapertanyaan as $rowpertanyaan)
            @csrf
            <input type='hidden' name='temp' value='{{count($datapertanyaan)}}'>
            <input type='hidden'name='tempidkuis'value="{{$rowpertanyaan->row_id_kuis}}">
            <div class="form-group my-4">
                <label>Pertanyaan</label>
                <h1 class="font-weight-bolder">{{$rowpertanyaan->pertanyaan}}</h1>
                <input type="hidden" name='soal{{$tempno}}' disabled value="{{ $rowpertanyaan->pertanyaan }}" placeholder="Let's start learning">
            </div>  
            
                @foreach($datajawaban as $rowjawaban)
             
                @if($rowpertanyaan->id==$rowjawaban->row_id_soal)
                    @if($rowjawaban->jawaban_user=="A")
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                        <label>A</label>
                            <div class="input-group-text">
                            <input type="radio" name='pilihan{{$tempno}}'checked value='A'>{{$rowpertanyaan->pilihan_a}}
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
                    @elseif($rowjawaban->jawaban_user=="B")
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                        <label>A</label>
                            <div class="input-group-text">
                            <input type="radio" name='pilihan{{$tempno}}' selected value='A'>{{$rowpertanyaan->pilihan_a}}
                            </div>
                        </div>
                    </div>
                    <div class="input-group my-2">
                        <label>B</label>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            <input type="radio" name='pilihan{{$tempno}}' checked value='B'>{{$rowpertanyaan->pilihan_b}}
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
                    @elseif($rowjawaban->jawaban_user=="C")
                    <div class="input-group my-2">
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
                            <input type="radio" name='pilihan{{$tempno}}'checked value='C'>{{$rowpertanyaan->pilihan_c}}
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
                    @elseif($rowjawaban->jawaban_user=="D")
                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                        <label>A</label>
                            <div class="input-group-text">
                            <input type="radio" name='pilihan{{$tempno}}'  value='A'>{{$rowpertanyaan->pilihan_a}}
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
                        <input type="radio" name='pilihan{{$tempno}}'checked value='D'>{{$rowpertanyaan->pilihan_d}}
                        </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-group my-4">
                        <h1 class="font-weight-bolder">Jawaban : {{$rowpertanyaan->kunci_jawaban}}</h1>
                    </div>
                @php
                    $tempno= $tempno+1;
                @endphp

                @endif
                
          
                @endforeach
            @endforeach
        </form>
    </div>
    @endsection
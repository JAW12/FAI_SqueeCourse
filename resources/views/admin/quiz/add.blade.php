@extends('layouts.admin')
@section('title')
    Add Quiz
@endsection
@section('content')
<div class="container my-5">
    @include('layouts.alert')
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
        <input type="hidden" name="nomersoal" id="nomersoal"  class="form-control my-2" placeholder="Soal" readonly='readonly' value={{ session()->get('cartnomer') }}>
    </div>
    <div class="form-group my-4">
        <input type="text" name="pertanyaan" id="pertanyaan" class="form-control my-2" placeholder="Soal">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">A</label>
        </div>
        <input type="text" class="form-control" placeholder="Pilihan A" name='pilihana' id='pilihana'aria-label="Judul" aria-describedby="Judul">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">B</label>
        </div>
        <input type="text" class="form-control" placeholder="Pilihan B" name='pilihanb'  id='pilihanb' aria-label="Judul" aria-describedby="Judul">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">C</label>
        </div>
        <input type="text" class="form-control" placeholder="Pilihan C" name='pilihanc'  id='pilihanc' aria-label="Judul" aria-describedby="Judul">
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">D</label>
        </div>
        <input type="text" class="form-control" placeholder="Pilihan D" name='pilihand'  id='pilihand' aria-label="Judul" aria-describedby="Judul">
    </div>

     <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Jawaban</label>
        </div>
        <select class="custom-select"  name="jawaban" id="jawaban" placeholder="Choose categories">
            <option value="A"selected>A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select>
    </div>

    <input type='button' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnnext" onclick='gotonext()' value="Save">
    <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnadd"value="Submit" >
    @else
        <div class="h3 text-center mr-5 mt-5">No Series Complete</div>
    @endif
    </form>
</div>
  
<script language='javascript'>
var myurl   = "<?php echo URL::to('/'); ?>";
var crt     = "<?php echo csrf_token(); ?>";

function savetocart () {
    var nomersoal   = $("#nomersoal").val(); 
    var pertanyaan  = $("#pertanyaan").val();
    var pilihana  = $("#pilihana").val();
    var pilihanb  = $("#pilihanb").val();
    var pilihanc  = $("#pilihanc").val();
    var pilihand  = $("#pilihand").val();
    var kunci_jawaban  = $("#kunci_jawaban").val();
    $.get(myurl + '/admin/quiz/savetocart', 
		{nomersoal:nomersoal,
        pertanyaan:pertanyaan,
        pilihana:pilihana,
        pilihanb:pilihanb,
        pilihanc:pilihanc,
        pilihand:pilihand,
        kunci_jawaban:kunci_jawaban }, 
        function(result) { 
            
        }
    );
}

function gotoprev() {
    var nomersoal   = $("#nomersoal").val(); 
    var pertanyaan  = $("#pertanyaan").val();
    var pilihana  = $("#pilihana").val();
    var pilihanb  = $("#pilihanb").val();
    var pilihanc  = $("#pilihanc").val();
    var pilihand  = $("#pilihand").val();
    var kunci_jawaban  = $("#jawaban").val();
    $.get(myurl + '/admin/quiz/savetocart', 
		{nomersoal:nomersoal,
        pertanyaan:pertanyaan,
        pilihana:pilihana,
        pilihanb:pilihanb,
        pilihanc:pilihanc,
        pilihand:pilihand,
        kunci_jawaban:kunci_jawaban }, 
  
        function(result) { 
            if(nomersoal>0){
                nomersoal-=1;
                $.get(myurl+'/admin/quiz/setnomersoal',
                    {nomersoal:nomersoal},
                    function (result){
                        $("#nomersoal").val(nomersoal); 
                        showsoal();
                    }                    
                );
            }
        }
    );
}

function gotonext() {
    var nomersoal   = $("#nomersoal").val(); 
    var pertanyaan  = $("#pertanyaan").val();
    var pilihana  = $("#pilihana").val();
    var pilihanb  = $("#pilihanb").val();
    var pilihanc  = $("#pilihanc").val();
    var pilihand  = $("#pilihand").val();
    var kunci_jawaban  = $("#jawaban").val();
    $.get(myurl + '/admin/quiz/savetocart', 
		{nomersoal:nomersoal,
        pertanyaan:pertanyaan,
        pilihana:pilihana,
        pilihanb:pilihanb,
        pilihanc:pilihanc,
        pilihand:pilihand,
        kunci_jawaban:kunci_jawaban }, 
        function(result) { 
            nomersoal = parseInt(nomersoal) + 1; 
            $.get(myurl+'/admin/quiz/setnomersoal',
                {nomersoal:nomersoal},
                function (result){
                    $("#nomersoal").val(nomersoal); 
                    showsoal();
                }                    
            );
        }
    );
}

function showsoal() {
    $.get(myurl + '/admin/quiz/showsoal', 
		{ }, 
        function(result) { 
            var arr = JSON.parse(result); 
            for(var a = 0; a < arr.length; a++) {
                $("#pertanyaan").val(arr[a].pertanyaan); 
                $("#pilihana").val(arr[a].pilihan_a); 
                $("#pilihanb").val(arr[a].pilihan_b);
                $("#pilihanc").val(arr[a].pilihan_c);
                $("#pilihand").val(arr[a].pilihan_d);
                $("#kunci_jawaban").val(arr[a].jawaban);
            }
	    }
    );
}
showsoal(); 
</script>


@endsection
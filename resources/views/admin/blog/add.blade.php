@extends('layouts.admin')
@section('content')
<div class="container">
        <div class="h3 mt-3">Add Blog</div>
        <form class="mt-4" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                </div>
                <select class="custom-select" id="categoriselect" name="categoriselect" placeholder="Choose categories">
                    <option selected></option>
                    <option value="1">Laravel</option>
                    <option value="2">Text Editor</option>
                    <option value="3">CSS</option>
                    <option value="4">JS</option>
                    <option value="5">PHP</option>
                    <option value="6">C#</option>
                </select>
                
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Judul</label>
                </div>
                <input type="text" class="form-control" placeholder="Judul" name='txtjudul'aria-label="Judul" aria-describedby="Judul">
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Isi</label>
                </div>
                <input type="text" class="form-control" placeholder="Isi" aria-label="Isi" name='txtisi'aria-describedby="Isi"style='height:100px'>
            </div>
            <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnadd"value="Add" >
        </form>
    </div>
@endsection
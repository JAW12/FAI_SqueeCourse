@extends('layouts.admin')
@section('title')
    Add Blog
@endsection
@section('content')
<div class="container pb-5">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <div class="h3 mt-3">Add Blog</div>
        <form class="mt-4" method="post">
            @csrf
                  <label>Judul</label>

            <div class="input-group mb-3">
           
                <input type="text" class="form-control" placeholder="Judul" name='txtjudul' aria-label="Judul" aria-describedby="Judul">
            </div>
                  <label>Categories</label>

            <div class="input-group mb-3">
                
                <select class="custom-select" id="categoriselect" name="categoriselect" placeholder="Choose categories">
                    <option disabled selected>Choose One!</option>
                    @foreach($category as $category)
                        <option value="{{$category->id}}">{{$category->nama}}</option>
                    @endforeach
                </select>
            </div>
                  <label>Tag</label>
            <div class="input-group mb-3">
               
                <select class="custom-select" id="tags" name="tags[]" placeholder="Choose Tag" multiple>
                    <option disabled selected>Choose One!</option>
                    @foreach($label as $label)
                        <option value="{{$label->id}}">{{$label->nama}}</option>
                    @endforeach
                </select>
            </div>
            <label>Isi</label>
            <div class="input-group mb-3">
           
                 
              
               <textarea name="body" id="body" class="form-control" style='height:200px;'></textarea>
                </div>
            <input type='submit' class="btn btn-success" style="width:100px;" name="btnadd"value="Add" >
            </div>
        </form>
@endsection
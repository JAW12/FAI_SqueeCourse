@extends('layouts.admin')
@section('title')
    Edit Blog
@endsection
@section('content')
<div class="container">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <div class="h3 mt-3">Edit Blog</div>
        <form class="mt-4" method="post">
            @csrf
            @foreach($blogpilih as $blogpilih)
            <input type='hidden'name='txttemp'value="{{$blogpilih->id}}">
            <div class="input-group mb-3">
            
            <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Judul</label>
                </div>
                <input type="text" class="form-control" placeholder="Judul" value='{{$blogpilih->judul}}'name='txtjudul'aria-label="Judul" aria-describedby="Judul">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Categories</label>
                </div>
                <select class="custom-select" id="categoriselect" name="categoriselect" placeholder="Choose categories">
                    <option disabled selected>Choose One!</option>
                    @foreach($category as $category)
                        @if($category->id==$blogpilih->row_id_kategori)
                        <option value="{{$category->id}}" selected='selected'>{{$category->nama}}</option>
                        @endif 
                        <option value="{{$category->id}}">{{$category->nama}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="tags">Tag</label>
                </div>
                <select class="custom-select  select2" id="tags" name="tags[]" placeholder="Choose Tag" multiple>
                    <option disabled selected>Choose One!</option>
                    @foreach($label as $label)
                        @php
                            $tempcheck=0;
                        @endphp
                        @foreach($labelterpilih as $rowlabel)
                            @if($label->id==$rowlabel->row_id_label)
                                @php
                                    $tempcheck=1;
                                @endphp
                            @endif
                        @endforeach
                        @if($tempcheck==1)
                            <option value="{{$label->id}}"selected>{{$label->nama}}</option>
                        @else
                            <option value="{{$label->id}}">{{$label->nama}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
           
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Isi</label>
                </div>
               <textarea name="body" id="body"  class="form-control" style='height:200px;'>{{$blogpilih->isi}}</textarea>
                </div>
            <input type='submit' class="btn btn-success" style="width:100px; border-radius: 50px;" name="btnupdate"value="Update" >
            <input type='submit' class="btn btn-danger" style="width:100px; border-radius: 50px;" name="btndelete"value="Delete" >
            </div>
            @endforeach
        </form>
@endsection
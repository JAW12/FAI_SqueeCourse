@extends('layouts.admin')
@section('content')
    <a href="/admin/blog/add" class="btn btn-success">Add Blog</a>
    <br>
   
    @if (count($blogactive) > 0)
    <div class="container">
    <div class="h3">List of Blog Active</div>
    <table class="table table-hover table-striped table-bordered-circle rounded-circle" >
    <thead>
        <tr>
          <th scope="col">Categori</th>
          <th scope="col">Judul</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
    @foreach($blogactive as $rowblog)
        <tr>
        @foreach($category as $rowcategory)
            @if($rowcategory->id==$rowblog->row_id_kategori)
                <td>{{$rowcategory->nama}}</td>
            @endif
        @endforeach
          <td>{{$rowblog->judul}}</td>
          <td> <button type="button" class="btn btn-info">Edit</button><td>
          
        </tr>
    @endforeach
    </tbody>
    </table>
    @else
    <div class="h3">List of Blog Active</div>
        <div class="h3 text-center mr-5 mt-5">No Blog Active Data Found</div>
    @endif
    <br>
    <div class="h3">List of Blog InActive</div>
    @if (count($blogimati) > 0)
    <div class="container">
    <table class="table table-hover table-striped table-bordered-circle rounded-circle" >
    <thead>
        <tr>
          <th scope="col">Categori</th>
          <th scope="col">Judul</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
    <tbody>
    @foreach($blogimati as $rowblog)
        <tr>
        @foreach($category as $rowcategory)
            @if($rowcategory->id==$rowblog->row_id_kategori)
                <td>{{$rowcategory->nama}}</td>
            @endif
        @endforeach
          <td>{{$rowblog->judul}}</td>
           <td> <button type="button" class="btn btn-info">Edit</button><td>
        </tr>
    @endforeach
    </tbody>
    </table>
    @else
        <div class="h3 text-center mr-5 mt-5">No Blog Active Data Found</div>
    @endif
@endsection
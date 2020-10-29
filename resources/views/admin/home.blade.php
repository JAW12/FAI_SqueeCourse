@extends('layouts.admin')
@section('content')
<div class="container">
      <table class="table table-hover table-striped table-bordered-circle rounded-circle" >
      @php
        $tempnomor=1;
      @endphp
      
      <thead>
        <tr>
        
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Nama</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($datauser as $rowpost)
        <tr>
         
          <td>{{$rowpost->username}}</td>
          <td>{{$rowpost->email}}</td>
          <td>{{$rowpost->nama}}</td>
          <td><a href="{{URL::to('admin/member')}}/{{$rowpost->username}}"> <button type="button" class="btn btn-info">Detail</button></a><td>
          
        </tr>
        @php
        $tempnomor=$tempnomor+1;
        @endphp
        @endforeach
      </tbody>
    </table>
</div>
@endsection

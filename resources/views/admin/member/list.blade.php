@extends('layouts.admin')
@section('content')
<div class="container">
    <table class="table table-hover table-striped table-bordered-circle rounded-circle" >
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
            <td>
                <a href="{{URL::to('admin/member')}}/{{$rowpost->username}}"> <button type="button" class="btn btn-info" style="width: 75px;">Detail</button></a>
                @if($rowpost->banned == 0)
                <a href="{{route('member.ban', $rowpost->username)}}"> <button type="button" class="btn btn-danger" style="width: 75px;">Ban</button></a>
                @elseif($rowpost->banned == 1)
                <a href="{{route('member.unban', $rowpost->username)}}"> <button type="button" class="btn btn-secondary" style="width: 75px;">Unban</button></a>
                @endif
            <td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="h3 mt-3">Searching Options</div>
        <form class="mt-4" method="post">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="search"><i class="fa fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Search user by username" aria-label="search" aria-describedby="search">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Options</label>
                </div>
                <select class="custom-select" id="statusSelect" name="statusSelect" placeholder="Search user by status">
                  <option selected></option>
                  <option value="1">Accepted</option>
                  <option value="2">Pending</option>
                  <option value="3">Rejected</option>
                </select>
              </div>
        </form>
        <br>
        <div class="h3">List of Transactions</div>
        @if (isset($cek))
            <a href="all/accept" class="btn btn-success">Accept all</a>
            <a href="all/reject" class="btn btn-danger">Reject all</a>
        @endif
            @if (count($data) > 0)
                <table class="table mt-4">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if (isset($cek))
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->user->nama }}</td>
                                    <td><a href="{{$item->id}}/accept" class="btn btn-success btn-block">Accept</a><a href="/{{$item->id}}/reject" class="btn btn-danger btn-block" style="float: right;">Reject</a></td>
                                </tr>
                            @endforeach
                        @else
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->user->nama }}</td>
                                    @if ($item->status_transaksi == 1)
                                        <td>Pending</td>
                                    @elseif($item->status_transaksi == 2)
                                        <td>Accepted</td>
                                    @else
                                        <td>Rejected</td>
                                    @endif
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            @else
                <div class="h3 text-center mr-5 mt-5">No Transaction Data Found</div>
            @endif
    </div>
@endsection

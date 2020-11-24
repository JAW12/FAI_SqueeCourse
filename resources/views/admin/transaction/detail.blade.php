@extends('layouts.admin')
@section('title')
    Membership Detail
@endsection
@section('content')
<div class="container-fluid min-vh-100 bg-light">
    <div class="container" style="max-width:90%;">
        <div class="flex-1 md:px-4" style="padding-top: 7%;">
            <div class="h1">
                Membership detail for {{$nama}}
            </div>
            <div class="border border-secondary mt-4 p-3 rounded" style="background-color: white;">
                <p class="card-text">
                    <h3>Type</h3><h5>{{$jenis}}</h5><h3>Valid Until</h3> <h5>{{$split}}</h5><h3>From</h3> <h5>{{$asal}}</h5><h3>To</h3> <h5>{{$tujuan}}</h5><h3>Status</h3> <h5>{{$status}}</h5><h3>Amount</h3><h5>{{$jumlah}}</h5>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

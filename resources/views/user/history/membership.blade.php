@extends('layouts.user')
@section('title')
    Your Active Membership
@endsection
@section('content')
<div class="container-fluid min-vh-100 bg-light">
    <div class="container" style="max-width:90%;">
        <div class="flex-1 md:px-4" style="padding-top: 7%;">
            @if ($jenis != "")
                <div class="h1">
                    Your Active Membership
                </div>
                <div class="border border-secondary mt-4 p-3 rounded" style="background-color: white;">
                    @php
                        $split=explode(" ",$trans->waktu_expired_membership);
                    @endphp
                    <p class="card-text">
                        <h3>Type</h3><h5>{{$jenis}}</h5><h3>Valid Until</h3> <h5>{{$split[0]}}</h5><h3>Access For</h3> <h5>{{$waktu}}</h5> <h5>{{$discord}}</h5><h5>{{$watchlist}}</h5><h3>Discount</h3><h5>{{$diskon}}</h5>
                    </p>
                </div>
            @else
                <div class="mt-4 h2">You currently do not have any active membership program<br> Go buy one that suits your need</div>
                <div class="row mt-4">
                    <div class="col-xs mr-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Silver</h5>
                            <p class="card-text"><sup>Rp. </sup>120.000</p>
                            <a href="/payment/Silver" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs mr-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Gold</h5>
                            <p class="card-text"><sup>Rp. </sup>288.000</p>
                            <a href="/payment/Gold" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">Platinum</h5>
                            <p class="card-text"><sup>Rp. </sup>504.000</p>
                            <a href="/payment/Platinum" class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

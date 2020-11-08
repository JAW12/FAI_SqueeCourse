@extends('layouts.user')
@section('content')
<div class="container-fluid grey py-4">
    <div class="container mb-5" style="max-width:90%;">
        <div class="flex-1 md:px-4">
            @if ($jenis != "")
                <div class="h1">
                    Your Active Membership
                </div>
                <div class="h2">
                    <div class="mt-4">Membership Type : {{$jenis}}</div>
                    @php
                        $split=explode(" ",$trans->waktu_expired_membership);
                    @endphp
                    <div class="mt-4">Valid Until :  {{$split[0]}}</div>
                    <div class="mt-4">Membership details: </div>
                </div>
                <div class="mt-4 h4">
                    @php
                        echo nl2br($detail);
                    @endphp
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

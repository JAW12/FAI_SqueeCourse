@extends('layouts.user')
@section('title')
    Payment Plan
@endsection
@section('content')
<div class="container-fluid grey py-4">
    <div class="container mb-5" style="max-width:90%;">
        <form action="" method="post">
            @csrf
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Every field should be filled
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            @endif
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="rounded bg-white shadow-sm p-3">
                        The amount will be determined from the membership plan of your choice. Please transfer according to the amount specified.
                    </div>
                    <div class="list-group shadow-sm mt-3">
                        <li class="list-group-item list-group-item-action mb-0 disabled">
                            <div class="d-flex">
                                <p class="text-muted mr-2">Rp</p>
                                <h3 class="text-dark mt-2">{{ $harga }}</h3>
                                <div class="ml-auto my-auto">
                                    <h5 class="mb-0"><i class="fa fa-credit-card"></i></h5>
                                </div>
                            </div>
                        </li>
                        <li href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0">BCA</p>
                                    <p class="h5 font-weight-bold mb-0">8000392936</p>
                                    <p class="mb-0">Jem Angkasa</p>
                                </div>
                                <div class="ml-auto my-auto">
                                    <img src="{{asset('images/contoh/bank.png')}}" width="70" alt="">
                                </div>
                            </div>
                        </li>
                        <li href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0">BCA</p>
                                    <p class="h5 font-weight-bold mb-0">0882037563</p>
                                    <p class="mb-0">Winda Angelina Utama</p>
                                </div>
                                <div class="ml-auto my-auto">
                                    <img src="{{asset('images/contoh/bank.png')}}" width="70" alt="">
                                </div>
                            </div>
                        </li>
                        <li href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0">BNI</p>
                                    <p class="h5 font-weight-bold mb-0">1060011124842</p>
                                    <p class="mb-0">Hendra Lingga Wijaya</p>
                                </div>
                                <div class="ml-auto my-auto">
                                    <img src="{{asset('images/contoh/bni.png')}}" width="70" alt="">
                                </div>
                            </div>
                        </li>
                        <li href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0">BRI</p>
                                    <p class="h5 font-weight-bold mb-0">020601087166506</p>
                                    <p class="mb-0">Kevin Hongary</p>
                                </div>
                                <div class="ml-auto my-auto">
                                    <img src="{{asset('images/contoh/bri.png')}}" width="70" alt="">
                                </div>
                            </div>
                        </li>
                        <li href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex">
                                <div>
                                    <p class="mb-0">Mandiri</p>
                                    <p class="h5 font-weight-bold mb-0">1050014597516</p>
                                    <p class="mb-0">Jem Angkasa Wijaya</p>
                                </div>
                                <div class="ml-auto my-auto">
                                    <img src="{{asset('images/contoh/mandiri.png')}}" width="70" alt="">
                                </div>
                            </div>
                        </li>
                    </div>
                    <a href="{{ url('membership') }}" class="btn btn-danger mt-3 mb-3 shadow-sm">Cancel</a>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="rounded bg-white shadow-sm p-3">
                        <h5>Confirm Your Payment</h5>
                        <p>Please do your payment confirmation when you already did the payment.</p>
                        <hr>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{ $nama }}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="sender">Your Bank</label>
                                <input type="text" name="sender" id="sender" placeholder="BCA" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sender">Your Account</label>
                                <input type="text" name="accountSender" id="accSender" placeholder="731 025 2527" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="destination">Destination Bank</label>
                                <select name="destination" id="destination" class="form-control">
                                    <option value="BCA">BCA</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="BNI">BNI</option>
                                    <option value="BRI">BRI</option>
                                    <option value="CC">Midtrans(Visa)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="date">Payment Date (dd/mm/yyyy)</label>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <div class="form-group pb-1">
                                <label for="cost">Cost</label>
                                <h5>{{ $paket }} - {{ $harga }}</h5>
                            </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary mt-3 shadow-sm">Confirm</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

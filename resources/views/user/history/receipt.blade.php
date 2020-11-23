@extends('layouts.master')
@section('title')
    Your Receipt
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container my-2">
            <div class="container my-2 d-flex justify-content-around nowrap">
                <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
            </div>
            <div class="container my-2 w-100 text-dark text-center font-weight-bold">
                <p class="text-dark">Jl. Keputih Tegal 8, Surabaya, East Java, Indonesia </p>
                <p class="text-dark">
                    <i class="fab fa-whatsapp"></i> 0817-2984-750
                    &nbsp; &nbsp; &nbsp;
                    <i class="fas fa-phone"></i> +62 817-2984-750
                    &nbsp; &nbsp; &nbsp;
                    <i class="far fa-envelope"></i> squeecourse@gmail.com
                </p>
            </div>
            <hr class="border border-dark">
            <div class="container my-2 text-left">
                <div class="row">
                    <div class="col-3">
                        <p class="h5 my-2">Customer Name</p>
                    </div>
                    <div class="col">
                        <p class="h5 my-2"> : {{$trans[0]->user->nama}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h5 my-2">Invoice Number</p>
                    </div>
                    <div class="col">
                        <p class="h5 my-2"> : {{$nota}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h5 my-2">Order Date</p>
                    </div>
                    <div class="col">
                        <p class="h5 my-2"> : {{$trans[0]->created_at}} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h5 my-2">From</p>
                    </div>
                    <div class="col">
                        <p class="h5 my-2"> : {{$trans[0]->bank_asal}}({{$trans[0]->nomor_rekening}})</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="h5 my-2">To</p>
                    </div>
                    <div class="col">
                        <p class="h5 my-2"> : {{$trans[0]->bank_tujuan}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <table class="table table-bordered">
                <thead class="text-dark text-center">
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Expire Date</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Subtotal</th>
                </thead>
                <tbody>
                    <tr>
                        <th class="align-middle"> 1 </th>
                        <td class="text-left align-middle"> {{$jenis}} Membership</td>
                        <td class="text-left align-middle"> {{$expire}} </td>
                        <td class="text-center align-middle"> 1 </td>
                        <td class="text-right align-middle"> {{ number_format($trans[0]->total_pembayaran, 0, ',', '.') }}</td>
                        <td class="text-right align-middle"> {{ number_format($trans[0]->total_pembayaran, 0, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <th colspan="5" class="text-right align-middle"> Total </th>
                        <td class="text-right align-middle"><b> Rp. {{ number_format($trans[0]->total_pembayaran, 0, ',', '.') }} </b></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-right display-5"><b>Website</b><br>https://squeecourse.masuk.id/</div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $( document ).ready(function() {
            window.print();
        });
    </script>
@endsection

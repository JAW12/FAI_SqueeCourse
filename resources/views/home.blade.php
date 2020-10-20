@extends('layouts.user')

@section('content')
    @include('series.layout-list')


<div class="container-fluid bg-white">
    <div class="container py-4">
        <h3 class="text-center">SqueeCourse are recommended <br>by <b>Developer, Teacher, Lecturer</b> and much more.</h1>
        <div class="row w-75 mx-auto my-5">
            <div class="col-12 col-md-2">
                <img src="{{asset('images/contoh/orang.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
            </div>
            <div class="col-12 col-md-10 mt-2">
                <h4>Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/contoh/orang.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/contoh/orang.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/contoh/orang.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5 text-center">
                <a href="#" class="btn btn-dark">Much More</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid linear">
    <div class="container py-4 text-center">
        <h1 class="text-light mt-5 font-weight-bold">Choose the membership plan you need</h1>
        <h5 class="text-light mt-3 font-weight-normal">If you enjoy SqueeCourse, you will save a lot of money by choosing <br> <b>Platinum</b> membership plan, because you will get Rp. 198.000 discount <br> from the monthly payments.</h5>
        <div class="card-deck mt-5 mb-3 text-center">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Silver</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp. 120.000 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                <li><b>1 month</b> full access to <b>all</b>. of our series</li>
                <li>No limitations</li>
                <li>Join on our Discord group!</li>
                <li>Make and keep your watchlist</li>
                <li>No discount</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy Now</button>
            </div>
            </div>

            <div class="card mb-4 shadow">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Gold</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp. 288.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>3 month</b> full access to <b>all</b>. of our series</li>
                    <li>No limitations</li>
                    <li>Join on our Discord group!</li>
                    <li>Make and keep your watchlist</li>
                    <li>20% discount from the monthly payments</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-primary">Buy Now</button>
            </div>
            </div>
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Platinum</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">Rp. 504.000</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li><b>6 month</b> full access to <b>all</b>. of our series</li>
                    <li>No limitations</li>
                    <li>Join on our Discord group!</li>
                    <li>Make and keep your watchlist</li>
                    <li>30% discount from the monthly payments</li>
                </ul>
                <button type="button" class="btn btn-lg btn-block btn-outline-primary">Buy Now</button>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });
    });
</script>
@endsection

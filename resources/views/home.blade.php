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
        @include('layouts.membership')
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

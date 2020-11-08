@extends('layouts.user')

@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="w-100" id="header">
        <div class="container pb-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-light" style="margin-top: 15%">
                        <h2 class="font-weight-light">Lets Learn</h2>
                        <h1 class="font-weight-bolder">Together</h1>
                        <p class="lead mt-4 font-weight-normal">Upgrade your skills with SqueeCourse by pushing your knowledge beyond to the next level, through the series provided here such as Laravel, Vue, React, CSS or JS Framework, and much more.</p>
                        <form class="mt-4 form-search" method="GET" action="{{ url('/searchseries/show') }}">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="search">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>

                                {{-- <input type="search" class="form-control cari" placeholder="Okay, so what will we learn today?" aria-label="search" aria-describedby="search" name="q"> --}}
                                <input type="search" class="form-control cari" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="q">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.series.layout-list')

    <div class="container-fluid bg-white">
    <div class="container py-4">
        <h3 class="text-center">SqueeCourse are recommended <br>by <b>Developer, Teacher, Lecturer</b> and much more.</h1>
        <div class="row w-75 mx-auto my-5">
            <div class="col-12 col-md-2">
                <img src="{{asset('images/testimonials/siti.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
            </div>
            <div class="col-12 col-md-10 mt-2">
                <h4>Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/ahmad.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Ahmad Bayu</h4>
                <h5 class="font-weight-light">"Courses that provided by Squee Course are understandable with clear presentation. Come and join Squee Course!"</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/juan.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Juan Noel</h4>
                <h5 class="font-weight-light">"Programming is our today era. Join Squee Course to get a bright future."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/rizky.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;"> <h4 class="mt-3">Rizky Novianto</h4>
                <h5 class="font-weight-light">"The most recommended place to learn PHP and Laravel. Squee Course could give explanation without in hurry. Best for begineer"</h5>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5 text-center">
                <a href="{{route('testimonials')}}" class="btn btn-dark">Much More</a>
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

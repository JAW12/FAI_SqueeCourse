@extends('layouts.user')
@section('content')
    <div class="w-100" id="header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-light" style="margin-top: 15%">
                        <h2 class="font-weight-light">Lets Learn</h2>
                        <h1 class="font-weight-bolder">Together</h1>
                        <p class="lead mt-4 font-weight-normal">Upgrade your skills with SqueeCourse by pushing your knowledge beyond to the next level, through the series provided here such as Laravel, Vue, React, CSS or JS Framework, and much more.</p>
                        <form class="mt-4" action="/search" method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="search"><i class="fa fa-search"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Okay, so what's we'll learn today?" aria-label="search" aria-describedby="search">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid grey py-4">
    <div class="container">
        <div class="row no-gutters shadow">
            <div class="col-12 col-md-6 shadow" style="background-image: url('/images/contoh/header_banner.jpeg'); background-size: cover;  background-position: center;">
            </div>
            <div class="col-12 col-md-6 bg-light">
                <div class="p-4">
                    <h6 class="text-secondary">Latest</h6>
                    <h2 style="width:90%">Build Band Profile and Lyrics Web with Laravel 8</h2>
                    <p class="mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                    <div class="mt-5 d-inline-flex">
                        <h6 class="text-secondary"><i class="fa fa-film"></i> 7 Episodes</h6>
                        <h6 class="text-secondary ml-4"><i class="fa fa-filter"></i> Laravel</h6>
                        <h6 class="text-secondary ml-4"><i class="fa fa-level-up"></i> Beginner</h6>
                    </div>
                    <hr>
                    <h6 class="text-secondary mb-3"><i class="fa fa-tags"></i>Tags</h6>
                    <div class="d-inline-flex">
                        <button type="button" class="btn btn-primary mr-2">
                            Laravel
                        </button>
                        <button type="button" class="btn btn-primary mr-2">
                            Laravel 8
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Just Updated</h3>
                <h5 class="font-weight-light">Are you curious what are the things just updated on SqueeCourse? <br> These are the series that has just been updated.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Most Popular Series</h3>
                <h5 class="font-weight-light">These are the most popular series of all time.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-normal">Newest Series</h3>
                <h5 class="font-weight-light">These are newest series released.
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mx-auto owl-carousel owl-theme card-deck">
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="{{asset('/images/contoh/header_banner.jpeg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title mb-1">Build Band Profile and Lyrics Web with Laravel 8</h5>
                        <a href="#" class="badge badge-pill badge-primary">Laravel</a>
                        <a href="#" class="badge badge-pill badge-primary">Laravel 8</a>
                        <p class="card-text mt-3">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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

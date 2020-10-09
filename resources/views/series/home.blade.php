@extends('layouts.user')
@section('content')
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
                <h3 class="font-weight-normal">Completed Series</h3>
                <h5 class="font-weight-light">These are series that has been completed, that you won't need to wait the next upcoming videos for each series.
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
                <h3 class="font-weight-normal">Series On Progress</h3>
                <h5 class="font-weight-light">These are series that you may like, but still in progress.
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
                <h3 class="font-weight-normal">Learn From Zero</h3>
                <h5 class="font-weight-light">Learn all of those from zero is the most right way to learn any language or new framework.
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

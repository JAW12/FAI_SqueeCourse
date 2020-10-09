@extends('layouts.user')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb grey small">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Laravel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Build Band Profile and Lyrics Web with Laravel 8</li>
    </ol>
</nav>
<div class="w-100" id="header" style="margin-top:-16px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div style="margin-top: 15%">
                    <div class="d-inline-flex mb-3">
                        <h5><a href="#" class="badge badge-pill badge-light mr-2">Laravel</a></h5>
                        <h5><a href="#" class="badge badge-pill badge-light">Laravel 8</a></h5>
                    </div>
                    <h3 class="text-light font-weight-bolder">Build Band Profile and Lyrics Web with Laravel 8</h3>
                    <p class="text-light lead mt-0 font-weight-normal">Alright, in this series we will learn how to build band profile and song lyrics, and sure but not least there will be a lot of things we'll learn here such as various relation techniques.</p>
                    <button class="btn btn-dark btn-lg bt-5"><i class="fa fa-play-circle mr-2"></i>Watch</button>
                    <div class="mt-5 text-light">
                        <div class="row">
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-clock-o mr-2"></i>64 minutes
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-film mr-2"></i>7 episodes
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-level-up mr-2"></i>Beginner
                            </p>
                            <p class="col-xs-12 col-lg-3">
                                <i class="fa fa-money mr-2"></i>Free Series
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid grey py-4">
    <div class="container mb-5">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="list-group shadow-sm">
                    <p class="list-group-item list-group-item-action mb-0 disabled"><i class="fa fa-exclamation-circle text-danger mr-2"></i><b>Series on progress</b></p>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <h1><i class="fa fa-play-circle"></i></h1>
                            <div class="ml-3">
                                <h5>Install Laravel, UI and Auth</h5>
                                <p class="text-muted mb-0">Episode 1</p>
                            </div>
                            <div class="ml-auto my-auto">
                                <p>12:58</p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <h1><i class="fa fa-play-circle"></i></h1>
                            <div class="ml-3">
                                <h5>Install Laravel, UI and Auth</h5>
                                <p class="text-muted mb-0">Episode 1</p>
                            </div>
                            <div class="ml-auto my-auto">
                                <p>12:58</p>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <h1><i class="fa fa-play-circle"></i></h1>
                            <div class="ml-3">
                                <h5>Install Laravel, UI and Auth</h5>
                                <p class="text-muted mb-0">Episode 1</p>
                            </div>
                            <div class="ml-auto my-auto">
                                <p>12:58</p>
                            </div>
                        </div>
                    </a>

                    <a class="list-group-item list-group-item-action disabled">
                        <div class="d-flex">
                            <h1><i class="fa fa-pencil"></i></h1>
                            <div class="ml-3 my-auto">
                                <h5>Take the quiz!</h5>
                            </div>
                            <div class="ml-auto my-auto">
                                <p class="mb-1">Completed</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

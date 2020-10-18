@extends('layouts.master')
@section('title', 'Forgot Password')
@section('style')
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

            @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        .linear{
            background-image: linear-gradient(to right , #4286f4, #32adff);
        }
    </style>
@endsection
@section('content')
    <form class="form-signin" method="post" action="{{route('register')}}">
        @csrf
        <div class="text-center">
            <img class="mb-4" src="{{asset('images/logo.png')}}" alt="" width="150" style="margin-top: -15%;">
        </div>
        <h1 class="h3 mb-0 font-weight-normal text-center">Forgot Password</h1>
        <p class="mb-4 mt-0 font-weight-normal text-center text-muted">Don't worry! Just enter your email here and we will send you the code to reset your password.</p>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
        </div>
        <button class="btn btn-lg btn-primary btn-block linear mb-3" type="submit">Request Reset Code</button>
        <div class="text-center">
            <a href="{{route('login')}}" class="text-decoration-none text-dark">back to <b>Login</b></a>
        </div
    </form>
@endsection

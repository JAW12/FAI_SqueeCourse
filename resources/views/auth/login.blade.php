@extends('layouts.master')
@section('title', 'Login')
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
    <form class="form-signin" method="post" action="{{route('login')}}">
        @csrf
        <div class="text-center">
            <img class="mb-4" src="{{asset('images/logo.png')}}" alt="" width="150" style="margin-top: -15%;">
        </div>
        <h1 class="h3 mb-0 font-weight-normal text-center">Please Sign In</h1>
        <p class="mb-4 mt-0 font-weight-normal text-center">Didn't have an account? <a href="{{route('register')}}">Register here.</a></p>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group d-flex justify-content-between">
            <div>
                <input type="checkbox" value="remember-me"> Remember me
            </div>
            <div>
                <a href="/forgot">Forgot your password?</a>
            </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block linear" type="submit">Sign In</button>
    </form>
@endsection

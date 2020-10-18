@extends('layouts.master')
@section('title', 'Register')
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
        <h1 class="h3 mb-0 font-weight-normal text-center">Please Sign Up</h1>
        <p class="mb-4 mt-0 font-weight-normal text-center">Already have an account? <a href="{{route('login')}}">Login here.</a></p>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email address">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirm Password">
        </div>
        <div class="form-group">
            <input type="checkbox" value="policy"> I agree to the <a href="/policy" target="_blank" rel="noopener noreferrer">privacy policy</a>
        </div>

        <button class="btn btn-lg btn-primary btn-block linear" type="submit">Sign Up</button>
    </form>
@endsection

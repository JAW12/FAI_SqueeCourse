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
        @include('layouts.alert')

        <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{old('username')}}">
                @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="nama">Name</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Name" value="{{old('nama')}}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{old('email')}}">
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" style="margin-bottom: 0px;" placeholder="Password">
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                </div>
                <input type="password" id="confirm" name="confirm" class="form-control @error('confirm') is-invalid @enderror" style="margin-bottom: 0px;" placeholder="Confirm Password">
                @error('confirm')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

        </div>
        <div class="form-group">
            <input type="checkbox" id="policy" name="policy"> I agree to the <a href="/policy" target="_blank" rel="noopener noreferrer">privacy policy</a>
            @error('policy')
                <p class="small text-danger">
                    {{$message}}
                </p>
            @enderror
        </div>

        <button class="btn btn-lg btn-primary btn-block linear" type="submit">Sign Up</button>
    </form>
@endsection

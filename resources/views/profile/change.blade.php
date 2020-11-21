@extends('layouts.user')
@section('title', 'Change Your Password');
@section('style')
    <style>
        .alert{
            margin-bottom: 15px !important;
        }
    </style>
@endsection
@section('content')
    <div class="container pt-3">
        @include('layouts.alert')
        <h3>Change Your Password</h3>
        <form method="post" class="mt-3 pb-5">
            @csrf
            <div class="form-group">
                <label for="old">Old Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="password" id="old" name="old" class="form-control @error('old') is-invalid @enderror" placeholder="Old Password">
                    @error('old')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="new">New Password</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" id="new" name="new" class="form-control @error('new') is-invalid @enderror" placeholder="New Password">
                    @error('new')
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
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="password" id="confirm" name="confirm" class="form-control @error('confirm') is-invalid @enderror" placeholder="Confirm Password">
                    @error('confirm')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection

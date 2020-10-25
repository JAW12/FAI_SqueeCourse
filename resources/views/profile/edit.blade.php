@extends('layouts.user')
@section('content')
    <div class="container pt-3">
        @include('layouts.alert')
        <h3>Change Your Profile</h3>
        <form method="post" class="mt-3 pb-5">
            @csrf
            <h5 class="mt-3">Personal Information</h5>
            <div class="form-row">
                <div class="form-group col">
                    <label for="nama">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="John Steve" value="{{Auth::user()->nama}}">
                    </div>
                    @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group col">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control" placeholder="johnsteve@gmail.com">
                    </div>
                    @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <h5 class="mt-3">Job Description</h5>
            <div class="form-row">
                <div class="form-group col">
                    <label for="bekerja_sebagai">Work as</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-suitcase"></i></span>
                        </div>
                        <input type="text" name="bekerja_sebagai" value="{{Auth::user()->bekerja_sebagai}}" class="form-control" placeholder="Web Developer">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="tempat_kerja">At</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" value="{{Auth::user()->tempat_kerja}}" name="tempat_kerja" placeholder="Somewhere...">
                    </div>
                </div>
            </div>
            <h5 class="mt-3">Social Media</h5>
            <div class="form-group">
                <label for="url_website">Personal Website</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-link"></i></span>
                    </div>
                    <input type="text" name="url_website" value="{{Auth::user()->url_website}}" class="form-control" placeholder="http://yourdomain.com">
                </div>
                @error('url_website')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_github">Github</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-github"></i></span>
                    </div>
                    <input type="text" name="url_github" value="{{Auth::user()->url_github}}" class="form-control" placeholder="https://github.com/yourusername">
                </div>
                @error('url_github')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_twitter">Twitter</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                    </div>
                    <input type="text" name="url_twitter" value="{{Auth::user()->url_twitter}}" class="form-control" placeholder="https://twitter.com/yourusername">
                </div>
                @error('url_twitter')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_facebook">Facebook</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook"></i></span>
                    </div>
                    <input type="text" name="url_facebook" value="{{Auth::user()->url_facebook}}"class="form-control" placeholder="https://www.facebook.com/yourusername">
                </div>
                @error('url_facebook')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url_instagram">Instagram</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                    </div>
                    <input type="text" name="url_instagram" value="{{Auth::user()->url_instagram}}"class="form-control" placeholder="https://www.instagram.com/yourusername">
                </div>
                @error('url_instagram')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <h5 class="mt-4">Short Description</h5>
            <div class="form-group">
                <textarea name="sedikit_tentang_anda" class="form-control" id="" cols="30" rows="5" placeholder="I am ...">{{Auth::user()->sedikit_tentang_anda}}</textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>
    </div>
@endsection

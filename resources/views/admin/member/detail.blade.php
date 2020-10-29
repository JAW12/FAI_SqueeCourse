@extends('layouts.admin')
@section('content')
    @foreach($datauser as $rowpost)
    <div class="container-fluid">
        <div class="row">
            <div id="gambar" class="col-xl-5 col-sm-12 mb-4">
            <br>
            <br>
                <img src="{{$rowpost->gravatar()}}" alt="" height="300" width="300" class="rounded-circle" style="object-fit: cover; object-position: center;">
            </div>
            <div id="produk" class="col-xl-5 col-sm-12 text-justify">
                <h1>{{$rowpost->nama}}</h1>
                <label for="nama">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" value="{{$rowpost->username}}" class="form-control" placeholder="No Username"disabled value="">
                </div>
                <label for="nama">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="email"  value="{{$rowpost->email}}" class="form-control" placeholder="No Email"disabled value="">
                </div>
                <label for="bekerja_sebagai">Work as</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-suitcase"></i></span>
                        </div>
                        <input type="text" name="bekerja_sebagai" value="{{$rowpost->bekerja_sebagai}}" class="form-control" placeholder=""disabled value="">
                    </div>
                <label for="tempat_kerja">At</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" value="{{$rowpost->tempat_kerja}}" name="tempat_kerja" placeholder="">
                    </div>
                    <label for="url_website">Personal Website</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-link"></i></span>
                    </div>
                    <input type="text" name="url_website" value="{{$rowpost->url_website}}" class="form-control" placeholder="">
                </div>

                
                <label for="url_website">Personal Website</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-link"></i></span>
                    </div>
                    <input type="text" name="url_website" value="{{$rowpost->url_website}}" class="form-control" placeholder="">
                </div>
                <label for="url_github">Github</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-github"></i></span>
                    </div>
                    <input type="text" name="url_github" value="{{$rowpost->url_github}}" class="form-control" placeholder="">
                </div>
                <label for="url_twitter">Twitter</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-twitter"></i></span>
                    </div>
                    <input type="text" name="url_twitter" value="{{$rowpost->url_twitter}}" class="form-control" placeholder="">
                </div>
                <label for="url_facebook">Facebook</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-facebook"></i></span>
                    </div>
                    <input type="text" name="url_facebook" value="{{$rowpost->url_facebook}}"class="form-control" placeholder="">
                </div>
                <label for="url_instagram">Instagram</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fab fa-instagram"></i></span>
                    </div>
                    <input type="text" name="url_instagram" value="{{$rowpost->url_instagram}}"class="form-control" placeholder="">
                </div>
            </div>
                
        </div>
    </div>
    @endforeach
    
    
@endsection
@extends('layouts.user')
@section('title', 'Testimonials');
@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        {{ session()->get('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="container-fluid bg-white">
    <div class="container py-4">
        <h3 class="text-center">SqueeCourse are recommended <br>by <b>Developer, Teacher, Lecturer</b> and much more.</h1>
        <div class="row w-75 mx-auto my-5">
            <div class="col-12 col-md-2">
                <img src="{{asset('images/testimonials/siti.jpg')}}" alt="" class="img-fluid rounded-circle shadow">
            </div>
            <div class="col-12 col-md-10 mt-2">
                <h4>Siti Iskandar</h4>
                <h5 class="font-weight-light">"This was the fastest way to make my skills a lot better! I will not feel burdened to be a premium member here."</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/ahmad.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Ahmad Bayu</h4>
                <h5 class="font-weight-light">"Courses that provided by Squee Course are understandable with clear presentation. Come and join Squee Course!"</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/juan.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Juan Noel</h4>
                <h5 class="font-weight-light">"Programming is our today era. Join Squee Course to get a bright future."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/rizky.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;"> <h4 class="mt-3">Rizky Novianto</h4>
                <h5 class="font-weight-light">"The most recommended place to learn PHP and Laravel. Squee Course could give explanation without in hurry. Best for begineer"</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/ika.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Ika Sukijan</h4>
                <h5 class="font-weight-light">"Squee Course is one of the learning course site that can help web developer learn from zero to hero."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/dimas.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Dimas Suprayitno</h4>
                <h5 class="font-weight-light">"Squee Course makes learning web become more accessible and easy to understand. No more reason for not learning. Thank you Squee Course!"</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/arief.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;"> <h4 class="mt-3">Arief Sinaga</h4>
                <h5 class="font-weight-light">"Squee Course is the exact website to learn how to develop website. Complete courses, good explanation from basics, and easy to understand."</h5>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-0 col-md-2"></div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/ahfan.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Ahfan Bahdul</h4>
                <h5 class="font-weight-light">"For highscool student like me, Squee Course is a suitable website to learn web development. Squee Course gives understandable explanation, complete and organized material."</h5>
            </div>
            <div class="col-12 col-md-4 text-center">
                <img src="{{asset('images/testimonials/endang.jpg')}}" alt="" class="img-fluid rounded-circle shadow" style="width: 25%;">
                <h4 class="mt-3">Endang Prasetiya</h4>
                <h5 class="font-weight-light">"Although I am a housewife, I love to learn in Squee Course. It helps me to learn about web development, so I can get extra money for being freelancer for web developer."</h5>
            </div>
        </div>
    </div>
</div>
@endsection

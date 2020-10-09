<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function home(){
        return view('series.home');
    }

    public function list(){
        return view('series.list');
    }

    public function category(){
        return view('series.category');
    }

    public function detail(){
        return view('series.detail');
    }

    public function episode(){
        return view('series.episode');
    }

    public function quiz(){
        return view('series.quiz');
    }
    public function submit(){

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataSeriesHeader = Series::orderBy("created_at", "DESC")
            ->get()->first();

        $dataSeriesPopular = Series::with('users')->get()->sortByDesc(function($series)
        {
            return $series->users->count();

        })->take(8);

        $dataSeriesNewest = Series::orderBy("created_at", "DESC")
            ->get()->take(8);

        $dataSeriesJustUpdated = Series::orderBy("updated_at", "DESC")
            ->get()->take(8);

        $dataSeriesCompleted = Series::where('status_complete', 1)
            ->get()->sortBy('judul')->take(8);

        $dataSeriesOnProgress = Series::where('status_complete', 0)
            ->get()->sortBy('judul')->take(8);

        $dataSeriesLearnFromZero = Series::where('tingkat_kesulitan', 1)
            ->get()->sortBy('judul')->take(8);


        return view('home', [
            "dataSeriesHeader"          => $dataSeriesHeader,
            "dataSeriesPopular"         => $dataSeriesPopular,
            "dataSeriesNewest"          => $dataSeriesNewest,
            "dataSeriesJustUpdated"     => $dataSeriesJustUpdated,
            "dataSeriesCompleted"       => $dataSeriesCompleted,
            "dataSeriesOnProgress"      => $dataSeriesOnProgress,
            "dataSeriesLearnFromZero"   => $dataSeriesLearnFromZero
        ]);
    }

    public function testimonials(){
        return view('testimonials');
    }

    public function privacy(){
        return view('privacy');
    }

    public function loginPage(){
        return view('auth.login');
    }

    public function registerPage(){
        return view('auth.register');
    }
}

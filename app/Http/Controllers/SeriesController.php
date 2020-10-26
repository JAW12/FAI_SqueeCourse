<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Label;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SeriesController extends Controller
{
    public function home(){
        // $dataSeries = Series::orderBy('judul')->get();

        // $dataSeriesHeader = Series::where("status_masuk_header", 1)->first();
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


        return view('series.home', [
            "dataSeriesHeader"          => $dataSeriesHeader,
            "dataSeriesPopular"         => $dataSeriesPopular,
            "dataSeriesNewest"          => $dataSeriesNewest,
            "dataSeriesJustUpdated"     => $dataSeriesJustUpdated,
            "dataSeriesCompleted"       => $dataSeriesCompleted,
            "dataSeriesOnProgress"      => $dataSeriesOnProgress,
            "dataSeriesLearnFromZero"   => $dataSeriesLearnFromZero
        ]);
    }

    public function list(){
        return view('series.list');
    }

    public function category($slug){
        $dataCategory = Category::where("slug", $slug)->first();

        return view('series.category', [
            "dataCategory"      => $dataCategory
        ]);
    }

    public function detail($slug){
        $dataSeries = Series::where("slug", $slug)->first();

        return view('series.detail', [
            "dataSeries"    => $dataSeries
        ]);
    }

    public function episode($slugseries, $idepisode){
        $dataEpisode = Episode::where('id', $idepisode)->first();

        return view('series.episode', [
            "dataEpisode"   => $dataEpisode,
        ]);
    }

    public function label($slug){
        $dataLabel = Label::where("slug", $slug)->first();
        return view('series.label', [
            "dataLabel"      => $dataLabel
        ]);
    }

    public function quiz(){
        return view('series.quiz');
    }

    public function submit(){

    }
}

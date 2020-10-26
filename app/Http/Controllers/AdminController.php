<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function login(Request $request){
        $input = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        if($input['username'] == 'admin'){
            if($input['password'] == 'admin'){
                Session::put('admin', true);
                return redirect()->route('admin.home');
            }
            else{
                return redirect()->back()->with("error", "Wrong password");
            }
        }
        else{
            return redirect()->back()->with("error", "User not found");
        }
    }

    public function logout(){
        Session::forget('admin');
        return redirect()->route('admin.login');
    }

    public function series(){
        $dataSeries = Series::orderBy("updated_at", "DESC")
            ->paginate(10);

        // mendapatkan data series yang sudah didelete
        $dataSeriesDeleted = Series::onlyTrashed()
            ->orderByDesc("deleted_at")
            ->paginate(10);

        return view("admin.series.list", [
            "dataSeries"        => $dataSeries,
            "dataSeriesDeleted" => $dataSeriesDeleted
        ]);
    }

    public function deleteSeries($slugSeries){
        $series = Series::where("slug", $slugSeries)->first();
        $result = $series->delete();

        if ($result) {
            return redirect()->back()
                ->with("success", "You have succesfully deleted series " . $series->judul);
        }
        else{
            return redirect()->back()
                ->with("error", "You have failed in deleting series " . $series->judul);
        }
    }

    public function restoreSeries($slugSeries){
        $series = Series::withTrashed()->where("slug", "=", $slugSeries)->first();
        $result = $series->restore();

        if ($result) {
            return redirect()->back()
                ->with("success", "You have succesfully restored series " . $series->judul);
        }
        else{
            return redirect()->back()
                ->with("error", "You have failed in restoring series " . $series->judul);
        }
    }
}

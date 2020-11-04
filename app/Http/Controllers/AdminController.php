<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Episode;
use App\Models\Label;
use App\Models\Series;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    function blog(){
        $blogactive=Post::where('status_aktif','=','1')->get();
        $blogimati=Post::where('status_aktif','=','0')->get();
        $category=category::all();
        return view('admin.blog.list', [
            'blogactive' => $blogactive,
            'blogimati' => $blogimati,
            'category'=>$category
        ]);
    }
    public function addpost(){
        return view('admin.blog.add');
    }
     public function member(){
        $datauser = User::all();
        return view('admin.member.list', [
            "datauser"          => $datauser
        ]);
    }

    public function memberDetail($username){
        $datauser = User::where('username', '=', $username)->get();
        return view('admin.member.detail', [
            "datauser"          => $datauser
        ]);
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
        $dataSeries = Series::withTrashed()->orderByDesc("updated_at")->get();

        // mendapatkan data series yang sudah didelete
        // $dataSeriesDeleted = Series::onlyTrashed()
        //     ->orderByDesc("deleted_at")
        //     ->paginate(10);

        return view("admin.series.list", [
            "dataSeries"        => $dataSeries,
            // "dataSeriesDeleted" => $dataSeriesDeleted
        ]);
    }

    public function viewDetailSeries($slugSeries){
        // get all data (soft deleted too)
        $dataSeries = Series::withTrashed()->where("slug", "=" ,$slugSeries)->first();

        return view('admin.series.detail', [
            "dataSeries"    => $dataSeries
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

    public function episode($slugseries, $slugepisode){
        $dataEpisode = Episode::withTrashed()->where('slug', "=", $slugepisode)->first();

        return view('admin.episodes.detail', [
            "dataEpisode"   => $dataEpisode,
        ]);
    }

    public function addEpisode(){

    }

    public function addSeries(){
        $dataLabels = Label::orderBy('nama')->get();

        // dd($dataLabels);

        return view("admin.series.add", [
            "dataLabels"    => $dataLabels
        ]);
    }

    public function editSeries($slugseries){
        $dataLabels = Label::orderBy('nama')->get();
        $dataSeries = Series::query()
            ->where("slug", "=", $slugseries)
            ->first();

        return view("admin.series.edit", [
            "dataLabels"    => $dataLabels,
            "dataSeries"    => $dataSeries
        ]);
    }

    public function transaction(){
        $data =Transaction::all();
        return view('admin.transaction.list',['data'=>$data]);
    }

    public function pendingTransaction(){
        $data = Transaction::where('status_transaksi','1')->get();
        return view('admin.transaction.list',['data'=>$data,'cek'=>"a"]);
    }

    public function transaction_search(Request $req){
        $data = Transaction::where('status_transaksi',$req->input('statusSelect'))->get();
        return view('admin.transaction.list',['data'=>$data]);
    }

    public function ban($username){
        $user = User::where('username', $username)->first();
        if($user != null){
            $user->banned = 1;
            $user->save();
            return redirect()->back()->with("success", "Berhasil ban " . $user->nama);
        }
    }

    public function unban($username){
        $user = User::where('username', $username)->first();
        if($user != null){
            $user->banned = 0;
            $user->save();
            return redirect()->back()->with("success", "Berhasil unban " . $user->nama);
        }
    }
}

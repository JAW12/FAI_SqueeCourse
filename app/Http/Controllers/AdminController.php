<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Label;
use App\Models\Series;
use App\Models\Episode;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        $series = Series::all();
        $episodes = Episode::all();
        $quizzes = Quiz::all();
        $transactions = Transaction::all();
        $member = User::all();
        $posts = Post::all();
        $monthly = DB::select('select month(updated_at) as month, sum(total_pembayaran) as sales from transactions where status_transaksi = 2 and year(updated_at) = year(now()) group by month(updated_at) order by month;');
        $jan = array_filter($monthly, function($sales){
            return $sales->month == 1;
        });
        $temp = 0;
        foreach($jan as $values){
            $temp = $values->sales;
        }
        $jan = $temp;

        $feb = array_filter($monthly, function($sales){
            return $sales->month == 2;
        });
        $temp = 0;
        foreach($feb as $values){
            $temp = $values->sales;
        }
        $feb = $temp;

        $mar = array_filter($monthly, function($sales){
            return $sales->month == 3;
        });
        $temp = 0;
        foreach($mar as $values){
            $temp = $values->sales;
        }
        $mar = $temp;

        $apr = array_filter($monthly, function($sales){
            return $sales->month == 4;
        });
        $temp = 0;
        foreach($apr as $values){
            $temp = $values->sales;
        }
        $apr = $temp;

        $may = array_filter($monthly, function($sales){
            return $sales->month == 5;
        });
        $temp = 0;
        foreach($may as $values){
            $temp = $values->sales;
        }
        $may = $temp;

        $june = array_filter($monthly, function($sales){
            return $sales->month == 6;
        });
        $temp = 0;
        foreach($june as $values){
            $temp = $values->sales;
        }
        $june = $temp;

        $july = array_filter($monthly, function($sales){
            return $sales->month == 7;
        });
        $temp = 0;
        foreach($july as $values){
            $temp = $values->sales;
        }
        $july = $temp;

        $aug = array_filter($monthly, function($sales){
            return $sales->month == 8;
        });
        $temp = 0;
        foreach($aug as $values){
            $temp = $values->sales;
        }
        $aug = $temp;

        $sep = array_filter($monthly, function($sales){
            return $sales->month == 9;
        });
        $temp = 0;
        foreach($sep as $values){
            $temp = $values->sales;
        }
        $sep = $temp;

        $oct = array_filter($monthly, function($sales){
            return $sales->month == 10;
        });
        $temp = 0;
        foreach($oct as $values){
            $temp = $values->sales;
        }
        $oct = $temp;

        $nov = array_filter($monthly, function($sales){
            return $sales->month == 11;
        });
        $temp = 0;
        foreach($nov as $values){
            $temp = $values->sales;
        }
        $nov = $temp;

        $des = array_filter($monthly, function($sales){
            return $sales->month == 12;
        });
        $temp = 0;
        foreach($des as $values){
            $temp = $values->sales;
        }
        $des = $temp;

        $total = 0;
        foreach($monthly as $values){
            $total += $values->sales;
        }


        return view('admin.home',
        [
            'series' => $series,
            'episodes' => $episodes,
            'quizzes' => $quizzes,
            'transactions' => $transactions,
            'member' => $member,
            'posts' => $posts,
            'jan' => $jan,
            'feb' => $feb,
            'mar' => $mar,
            'apr' => $apr,
            'may' => $may,
            'june' => $june,
            'july' => $july,
            'aug' => $aug,
            'sep' => $sep,
            'oct' => $oct,
            'nov' => $nov,
            'des' => $des,
            'total' => $total,
        ]);
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

    public function episodes(){
        $dataEpisodes = Episode::withTrashed()->orderByDesc('updated_at')->get();

        return view('admin.episodes.list', [
            "dataEpisodes"  => $dataEpisodes
        ]);
    }

    public function episode($slugseries, $slugepisode){
        $dataEpisode = Episode::withTrashed()->where('slug', "=", $slugepisode)->first();

        return view('admin.episodes.detail', [
            "dataEpisode"   => $dataEpisode,
        ]);
    }

    public function addEpisode(){
        $dataSeries = Series::all()->sortBy('judul');
        return view('admin.episodes.add', [
            'dataSeries'    => $dataSeries
        ]);
    }

    public function editEpisode($slugSeries, $slugepisode){
        $dataEpisode = Episode::withTrashed()->where('slug', "=", $slugepisode)->first();
        $dataSeries = Series::all()->sortBy('judul');

        return view('admin.episodes.edit', [
            'episode'   => $dataEpisode,
            'dataSeries'    => $dataSeries
        ]);
    }
}

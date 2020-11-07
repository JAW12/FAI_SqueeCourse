<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Episode;
use App\Models\Label;
use App\Models\Series;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserWatchlist;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\LabelSeri;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

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
        $cekwatchlist = UserWatchlist::query()
                        ->where("row_id_seri", $dataSeries->id)
                        ->where("row_id_user", Auth::id())
                        ->get();

        $isSaved = false;
        if (count($cekwatchlist) > 0) {
            $isSaved = true;
        }

        return view('series.detail', [
            "dataSeries"    => $dataSeries,
            "isSaved"   => $isSaved
        ]);
    }

    public function episode($slugseries, $slugepisode){
        $dataEpisode = Episode::where('slug', $slugepisode)->first();
        $dataUser = User::find(Auth::id());

        //cek membership user dengan status accepted
        $statusbisanonton = false;
        // $pesan = "";

        if ($dataEpisode->status_berbayar == 0) {
            // kalo gratis maka dia bisa nton
            $statusbisanonton = true;
        }
        else if ($dataEpisode->status_berbayar == 1) {
            if (Auth::check()) {
                // kalo berbayar maka cek status membership sdh pny / belum sm sudah expired atau belum
                $timestampsnow = Carbon::now();
                $dataMemberships = Transaction::orderBy('created_at', 'desc')
                    ->where('row_id_user', '=', $dataUser->id)
                    ->where('status_transaksi', '=', '2')
                    ->where('waktu_expired_membership', '>=', $timestampsnow)
                    ->get();

                // cek
                if (count($dataMemberships) <= 0) {
                    //krn ga pny membership yg sdh diterima maka ga bisa nton
                    $statusbisanonton = false;
                }
                else{
                    //kl pny brati bisa nton
                    $statusbisanonton = true;
                }

                // yang terakhir cek kl dia sdh login, apakah email sdh diverifikasi. kl belum verifikasi maka dia ga bisa nton
                // $statusbisanonton = $statusbisanonton && $dataUser->getVerify();
            }
        }

        $countallepisodes = count(Episode::all());
        return view('series.episode', [
            "dataEpisode"   => $dataEpisode,
            "bisaNonton"    => $statusbisanonton,
            // "pesan"         => $pesan,
            "jumlahepisode" => $countallepisodes
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

    public function watchlist($slugSeries){
        $dataSeries = Series::where("slug", $slugSeries)->first();
        $cekwatchlist = UserWatchlist::query()
                        ->where("row_id_seri", $dataSeries->id)
                        ->where("row_id_user", Auth::id())
                        ->get();

        if (count($cekwatchlist) <= 0) {
            $watchlist = new UserWatchlist();
            $watchlist->row_id_seri = $dataSeries->id;
            $watchlist->row_id_user = Auth::id();
            $result = $watchlist->save();

            if($result){
                return redirect()->back()
                    ->with("success", "Got it! We've added this series to your watch list");
            }
            else{
                return redirect()->back()
                    ->with("error", "Uh oh! Adding series to your watchlist has gone wrong. Please try again later");
            }
        }
        else{
            $id = $cekwatchlist->first()->id;
            $watchlist = UserWatchlist::find($id);
            $result = $watchlist->forceDelete();

            if($result){
                return redirect()->back()
                    ->with("success", "Got it! We've removed this series from your watch list");
            }
            else{
                return redirect()->back()
                    ->with("error", "Uh oh! Adding series to your watchlist has encountered some troubles. Please try again later");
            }
        }
    }

    public function submit(){

    }

    public function add(Request $request){
        $customMessages = [
            "judul.min" => "Series title must at least have 4 characters",
            'mimes'     => 'Only jpeg, png, bmp, tiff are allowed.'
        ];

        $input = $request->validate([
            "picture"   => "required|mimes:jpeg,png,bmp,tiff'",
            "judul"     => "required|string|min:4",
        ], $customMessages);

        //pastikan tidak ada judul yang sama
        $cekseries = Series::query()
            ->where('judul', '=', $input['judul'])
            ->get();

        //baru bisa add series baru kalo gaada judul yg sama
        if (count($cekseries) > 0) {
            return redirect()->back()
                ->with("error", "Sorry, series with this title already exists.");
        }
        else{
            // try catch transaction
            $result = false;
            try {
                DB::beginTransaction();

                $series = new Series();
                $series->row_id_kategori = $request->input('kategori');
                $series->judul = $input["judul"];
                $series->slug = Str::slug($input["judul"]);
                $series->total_durasi = 0;
                $series->tingkat_kesulitan = $request->input("tingkat_kesulitan");
                $series->status_berbayar = $request->input("status_berbayar");
                $series->status_complete = $request->input("status_complete");
                $result = $series->save();

                // masukin deskripsi kl ada diisi
                if ($request->input("deskripsi") != null) {
                    $series->deskripsi = $request->input("deskripsi");
                }

                // file upload gambar
                if ($request->file("picture") != null) {
                    // file upload
                    $nama = $series->id . "." .
                        $request->file("picture")->getClientOriginalExtension();

                    // simpan di folder
                    $result = $result && $request->file("picture")
                        ->storeAs("images", $nama, "public");

                    // setelah disave dia bakalan punya primary key jadi query kek gini ini bisa. modelnya jadi kek nge-update
                    $series->url_foto_banner = $nama;
                    $result = $result && $series->save();
                }

                //masukin labels
                $status = true;
                foreach ($request->input("labels") as $key => $value) {
                    $labelseries = new LabelSeri();
                    $labelseries->row_id_seri = $series->id;
                    $labelseries->row_id_label = $value;
                    $status = $status && $labelseries->save();
                }

                DB::commit();

            }catch(\Exception $e){
                DB::rollback();
                return redirect()->back()
                    ->with("error", $e->getMessage());
            }

            if($result && $status){
                return redirect()->back()
                    ->with("success", "New series has been succesfully added");
            }
            else{
                return redirect()->back()
                    ->with("error", "Uh oh! Adding series has encountered some troubles. Please try again later");
            }
        }
    }

    public function edit(Request $request, $slugseries){
        $customMessages = [
            "judul.min" => "Series title must at least have 4 characters"
        ];

        $input = $request->validate([
            "judul"     => "required|string|min:4",
        ], $customMessages);

        // try catch transaction
        try {
            DB::beginTransaction();

            $series = Series::query()
                ->where("slug", "=", $slugseries)
                ->first();;
            $series->row_id_kategori = $request->input('kategori');
            $series->judul = $input["judul"];
            $series->deskripsi = $request->input("deskripsi");
            $series->slug = Str::slug($input["judul"]);
            $series->total_durasi = 0;
            $series->tingkat_kesulitan = $request->input("tingkat_kesulitan");
            $series->status_berbayar = $request->input("status_berbayar");
            $series->status_complete = $request->input("status_complete");
            $result = $series->save();

            // file upload gambar
            if ($request->file("picture") != null) {
                // file upload
                $nama = $series->id . "." .
                    $request->file("picture")->getClientOriginalExtension();

                // simpan di folder
                $result = $result && $request->file("picture")
                    ->storeAs("images", $nama, "public");

                // setelah disave dia bakalan punya primary key jadi query kek gini ini bisa. modelnya jadi kek nge-update
                $series->url_foto_banner = $nama;
                $result = $result && $series->save();
            }

            //reset label
            $result = DB::table('label_seri')
                ->where("row_id_seri", $series->id)
                ->delete();

            // dd($result);

            //masukin semua labels yg dipilih
            $status = true;
            foreach ($request->input("labels") as $key => $value) {
                $labelseries = new LabelSeri();
                $labelseries->row_id_seri = $series->id;
                $labelseries->row_id_label = $value;
                $status = $status && $labelseries->save();
            }

            DB::commit();

        }catch(\Exception $e){
            DB::rollback();
        }

        $url_path = "/admin/series/" . $series->slug . "/edit";
        if($result && $status){
            return redirect($url_path)
                ->with("success", "This series has been succesfully edited");
        }
        else{
            return redirect($url_path)
                ->with("error", "Uh oh! Editing series has encountered some troubles. Please try again later");
        }
    }
}

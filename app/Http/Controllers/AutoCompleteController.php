<?php

namespace App\Http\Controllers;

use App\Http\Resources\SearchSeriesResources;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutoCompleteController extends Controller
{
    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = Series::orderBy("judul", "desc")
                ->where('judul', 'like', "'%$query%")
                ->get();

            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= "<li class='search-result'><a href='{{ url('/series/$row->slug') }}'>$row->judul</a></li>";
            }
            $output .= '</ul>';
            echo $output;
        }
    }


    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = Series::orderBy("judul", "desc")
                ->where('judul', 'like', "'%$cari%")
                ->get();
            return response()->json($data);
        }
    }

    public function searchJSON(Request $request){
        $input = $request->validate([
            'q' => 'required'
        ]);

        if ($input['q'] == "CONST_SHOW_ALL") {
            $arrSeries = Series::all()->sortBy('judul');
        }
        else{
            $arrSeries = Series::orderBy('judul', 'ASC')
                ->where(DB::raw("LOWER(judul)"), "like",
                "%".\strtolower($input['q'])."%")
                ->get();
        }

        return SearchSeriesResources::collection($arrSeries);
    }

    public function redirectResult(Request $request){
        $judulSeri = $request->input('q');

        // ->appends($request->query())
        // untuk nambah query param di pagination link supaya waktu pindah halaman param get di url ga hilang
        $series = Series::orderBy('judul', 'ASC')
                ->where(DB::raw("LOWER(judul)"), "like",
                "%".\strtolower($judulSeri)."%")
                ->paginate(9)
                ->appends($request->query());

        // pake total soalnya kalo count nanti dia cm ngecount apa yg ditampilkan di pagination aja
        if ($series->total() > 0) {
            if ($series->total() == 1) {
                return redirect('/series/' . $series->first()->slug);
            }
            else{
                return view('user.search.searchresults', [
                    'dataSeries'    => $series,
                    'keyword'       => $judulSeri
                ]);
            }
        }
        else{
            return view('user.search.notfound');
        }
    }


}

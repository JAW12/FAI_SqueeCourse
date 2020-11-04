<?php

namespace App\Http\Controllers;

use App\Models\Series;
use Illuminate\Http\Request;

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


}

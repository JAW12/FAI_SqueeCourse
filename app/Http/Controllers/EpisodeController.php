<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EpisodeController extends Controller
{
    //function untuk ngecek apakah url youtube ini bisa diplay dan bisa diembed atau tidak. dibuang sayang :(
    // src : https://stackoverflow.com/questions/10426204/validate-youtube-url-and-it-should-be-exists
    function isEmbeddableYoutubeURL($url) {
        // Let's check the host first
        $parse = parse_url($url);
        $host = $parse['host'];
        if (!in_array($host, array('youtube.com', 'www.youtube.com'))) {
            return false;
        }

        $ch = curl_init();
        $oembedURL = 'www.youtube.com/oembed?url=' . urlencode($url).'&format=json';
        curl_setopt($ch, CURLOPT_URL, $oembedURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($output);

        if (!$data) return false; // Either 404 or 401 (Unauthorized)
        if (!$data->{'html'}) return false; // Embeddable video MUST have 'html' provided

        return true;
    }

    public function add(Request $request){
        // regex youtube url :
        $regexp = "/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/";

        $customMessages = [
            'url.regex' => 'URL must be in form of a youtube url'
        ];

        //validation
        $input = $request->validate([
            'judul'     => 'required',
            'durasi'    => 'required|numeric|min:1',
            'url'       => ['required',
                            'regex:' . $regexp],
        ], $customMessages);


        if (strpos($input['url'], 'embed') != false) {
            //add
            $episode = new Episode();
            $episode->row_id_seri = $request->input('series');
            $episode->judul = $input['judul'];
            $episode->slug = Str::slug($input['judul']);
            $episode->url_youtube = $input['url'];
            $episode->durasi = $request->input('durasi');
            $episode->status_berbayar = $request->input('status_berbayar');
            $result = $episode->save();

            //add durasi total series
            $seriEp = Series::withTrashed()
                    ->where('id', '=', $episode->series->id)->first();
            $seriEp->total_durasi = $seriEp->total_durasi + $episode->durasi;
            $result = $result && $seriEp->save();

            if ($result) {
                return redirect()->route('admin.episodes')->with('success', 'New episode has been succesfully added');
            }
            else{
                return redirect()->back()
                    ->with('error', "Uh oh! we've encountered some problems while adding new episode. Please try again later");
            }
        }
        else{
            return redirect()->back()
                ->with("error", "Youtube URL must be an embed url");

        }
    }

    public function edit(Request $request, $slugSeries, $slugEpisode){
        // regex youtube url :
        $regexp = "/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/";

        $customMessages = [
            'url.regex' => 'URL must be in a form of a youtube url'
        ];

        //validation
        $input = $request->validate([
            'judul'     => 'required',
            'durasi'    => 'required|numeric|min:1',
            'url'       => ['required',
                            'regex:' . $regexp],
        ], $customMessages);


        if (strpos($input['url'], 'embed') != false) {
            //add
            $episode = Episode::withTrashed()->where('slug', '=', $slugEpisode)->first();
            $episode->row_id_seri = $request->input('series');
            $episode->judul = $input['judul'];
            $episode->slug = Str::slug($input['judul']);
            $episode->url_youtube = $input['url'];
            $episode->durasi = $request->input('durasi');
            $episode->status_berbayar = $request->input('status_berbayar');
            $result = $episode->save();

            //redirect
            $series = $episode->series;
            $url_path = "/admin/series/" . $series->slug .
                        "/episode/" . $episode->slug . "/edit";
            if($result){
                return redirect($url_path)
                    ->with("success", "This episode has been succesfully edited");
            }
            else{
                return redirect($url_path)
                    ->with("error", "Uh oh! Editing episode has encountered some troubles. Please try again later");
            }
        }
        else{
            return redirect()->back()
                ->with("error", "Youtube URL must be an embed url");

        }

    }

    public function delete(Request $request, $slugseries, $slugEpisode){
        $episode = Episode::withTrashed()->where('slug', '=', $slugEpisode)->first();
        $result = $episode->delete();

        if ($result) {
            return redirect()->back()
                ->with("success", "You have succesfully deleted episode " . $episode->judul);
        }
        else{
            return redirect()->back()
                ->with("error", "You have failed in deleting episode " . $episode->judul);
        }
    }

    public function restore(Request $request, $slugseries, $slugEpisode){
        $episode = Episode::withTrashed()->where('slug', '=', $slugEpisode)->first();
        $result = $episode->restore();

        if ($result) {
            return redirect()->back()
                ->with("success", "You have succesfully restored episode " . $episode->judul);
        }
        else{
            return redirect()->back()
                ->with("error", "You have failed in restoring episode " . $episode->judul);
        }
    }


}

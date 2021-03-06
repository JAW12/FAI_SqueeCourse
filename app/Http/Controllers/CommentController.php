<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function reply(Request $request, $slugSeries, $idEpisode, $idComment){
        $customMessages = [
            "comment.required"  => "Sorry but you can't add an empty reply"
        ];
        $input = $request->validate([
            "comment"   => "required"
        ], $customMessages);

        $newreply = new Reply();
        $newreply->row_id_komentar = $idComment;
        $newreply->isi_reply = $input['comment'];
        if (Auth::check()) {
            $newreply->row_id_user = Auth::user()->id;
        }
        $result = $newreply->save();

        if ($result) {
            return redirect()->back()
                ->with("success", "Your reply has been added");
        }
        else{
            return redirect()->back()
                ->with("error", "Adding reply has failed. Please try again later");
        }
    }

    public function comment(Request $request, $slugSeries, $slugEpisode){
        $customMessages = [
            "comment.required"  => "Sorry but you can't add an empty reply"
        ];
        $input = $request->validate([
            "comment"   => "required"
        ], $customMessages);

        $dataEpisode = Episode::where('slug', $slugEpisode)->first();

        $newcomment = new Comment();
        $newcomment->row_id_episode = $dataEpisode->id;
        $newcomment->isi_komentar = $input['comment'];
        if (Auth::check()) {
            $newcomment->row_id_user = Auth::user()->id;
        }
        $result = $newcomment->save();

        if ($result) {
            return redirect()->back()
                ->with("success", "Your comment has been added");
        }
        else{
            return redirect()->back()
                ->with("error", "Adding comment has failed. Please try again later");
        }
    }
}

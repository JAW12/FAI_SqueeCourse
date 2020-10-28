<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //return halmana history membership member
    public function membership(){
        $transaction = [];
        //row id user
        $row_id_user = 1;
        //get datas
        $cek = "";
        $date_now = date("yy-m-d");
        $date_10=date("yy-m-d", strtotime("$date_now +10 days"));
        $transaction = Transaction::where('row_id_user', '=', $row_id_user)->get();

        foreach ($transaction as $item){
            $split = explode(" ",$item->waktu_expired_membership);
            if($split[0] <= $date_10){
               $cek = "a";
            }
        }
        return view('user.history.transaction',["trans"=>$transaction,"date"=>$date_now,"date_10"=>$cek]);
    }

    public function watchlist(){

    }

    public function register(Request $request) {
        $input = $request->validate([
            "username" => "required|unique:users,username",
            "nama"  => "required|string|min:5",
            "email" => "required|email|unique:users,email",
            "password" => "required|string|min:4",
            "confirm" => "required|same:password",
            "policy" => "required"
        ]);

        $attr = $request->all();
        $attr['password'] = Hash::make($request->password);
        $attr['remember_token'] = Str::random(10);
        $result = User::create($attr);

        if ($result) {
            return redirect()->route('login')->with('success', 'Register successful');
        } else {
            return redirect()->back()->with('error', 'Register failed');
        }
    }

    public function profile($username){
        $user = User::where('username', $username)->first();
        return view('profile.show', [
            'user' => $user
        ]);
    }

    public function edit(){
        return view('profile.edit');
    }

    public function editSubmit(Request $request){
        $attr = $request->all();
        if($request->email == Auth::user()->email){
            $input = $request->validate([
                "url_website" => "nullable|url",
                "url_github" => "nullable|url",
                "url_twitter" => "nullable|url",
                "url_facebook" => "nullable|url",
                "url_instagram" => "nullable|url"
            ]);
        }
        else{
            $input = $request->validate([
                "email" => "required|email|unique:users,email",
                "url_website" => "nullable|url",
                "url_github" => "nullable|url",
                "url_twitter" => "nullable|url",
                "url_facebook" => "nullable|url",
                "url_instagram" => "nullable|url"
            ]);
            $attr['email_verified_at'] = null;
        }

        $result = User::find(Auth::id())->update($attr);
        if ($result) {
            return redirect()->route('user.profile', Auth::user()->username)->with('success', 'Change profile successful');
        } else {
            return redirect()->back()->with('error', 'Change profile failed');
        }
    }
}

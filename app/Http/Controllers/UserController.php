<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyMail;
use App\Models\Series;
use App\Models\VerifyUser;
use App\Models\Transaction;
use App\Notifications\MailVerificationNotification;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Models\UserWatchlist;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    //return halmana history membership member
    public function membership(){
        $transaction = [];
        //row id user
        $row_id_user = Auth::id();
        //get datas
        // $date = date("yy-m-d");
        $date = Carbon::now();
        $jenis = "";
        $detail = "";
        $transaction = Transaction::where('row_id_user', '=', $row_id_user)->where('waktu_expired_membership', '>', $date)->first();
        if($transaction != ""){
            if($transaction->jenis_membership == 1){
                $jenis = "Silver";
                $detail = "-> 1 month of full access to all of our series \r\n -> Access to our Discord group \r\n -> Make and keep your watchlist";
            }
            elseif ($transaction->jenis_membership == 2) {
                $jenis = "Gold";
                $detail = "-> 3 months of full access to all of our series \r\n -> Access to our Discord group \r\n -> Make and keep your watchlist \r\n -> 20% discount from the monthly payments";
            }
            elseif ($transaction->jenis_membership == 3){
                $jenis = "Platinum";
                $detail = "6 months of full access to all of our series \r\n -> Access to our Discord group \r\n -> Make and keep your watchlist \r\n -> 30% discount from the monthly payments";

            }
        }
        return view('user.history.membership',["trans" => $transaction,"jenis" => $jenis, "detail" => $detail]);
    }

    //return halmana history transaksi member
    public function transaction(){
        $transaction = [];
        //row id user
        $row_id_user = Auth::id();
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

    public function sendVerify(){
        $verifyUser = VerifyUser::create([
            'user_id' => Auth::user()->id,
            'token' => sha1(time())
        ]);

        Auth::user()->notify(new MailVerificationNotification($verifyUser->token));
        return redirect()->route('home')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }

    public function verifyUser(Request $request)
    {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
    ]);

    $verifyUser = VerifyUser::where('token', $request->token)->first();
    if(isset($verifyUser) ){
        $user = $verifyUser->user;
        if(!$user->verified) {
        $verifyUser->user->email_verified_at = now();
        $verifyUser->user->save();
        $status = "Your e-mail is verified.";
        } else {
        $status = "Your e-mail is already verified.";
        }
        VerifyUser::where('user_id', $user->id)->delete();
    } else {
        return redirect('home')->with('error', "Sorry your email cannot be identified.");
    }
    return redirect()->route('home')->with('success', $status);
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

    public function watchlist(){
        $dataUser = User::find(Auth::id());
        $dataSeriesWatchList = $dataUser->watchlist()->paginate(6);

        // tambahkan waktu penambahan series ke watchlist
        foreach ($dataSeriesWatchList as $key => $series) {
            $watchlist = UserWatchlist::query()
                ->where("row_id_seri", $series->id)
                ->where("row_id_user", Auth::id())->first();

            if ($watchlist != null) {
                $series->added_at = $watchlist->created_at;
            }
        }

        // dd($dataSeriesWatchList);

        // $dataWatchList = $dataUser->userwatchlist;
        // foreach ($dataWatchList as $key => $watchlist) {
        //     $series = Series::find($watchlist->row_id_seri);
        //     $dataWatchList->series = $series;
        // }

        // dd($dataSeriesWatchList);

        return view("user.watchlist", [
            "dataUser"      => $dataUser,
            "dataWatchlist" => $dataSeriesWatchList
        ]);
    }
}

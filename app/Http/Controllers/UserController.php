<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyMail;
use App\Models\Series;
use App\Models\VerifyUser;
use App\Models\HUserKuis;
use App\Models\Quiz;
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
    //history quiz
    public function quiz(){
         $hasil=HUserkuis::where('row_id_user','=', Auth::id())->get();
         $quiz=Quiz::get();
         return view('user.history.quiz',[
             'hasil'=>$hasil,
            'quiz'=>$quiz
         ]);
    }
    //return halmana history membership member
    public function membership(){
        $transaction = [];
        //row id user
        $row_id_user = Auth::id();
        //get datas
        // $date = date("yy-m-d");
        $date = Carbon::now();
        $jenis = "";
        $waktu = "";
        $discord = "Our Discord group";
        $watchlist = "Making and keeping your watchlist";
        $diskon = "";
        $transaction = Transaction::where('row_id_user', '=', $row_id_user)->where('waktu_expired_membership', '>', $date)->where('status_transaksi','=','2')->orderBy('created_at','DESC')->first();
        if($transaction != ""){
            if($transaction->jenis_membership == 1){
                $jenis = "Silver";
                $waktu = "1 month of full access to all of our series";
                $diskon = "No discount for this membership";
            }
            elseif ($transaction->jenis_membership == 2) {
                $jenis = "Gold";
                $waktu = "3 months of full access to all of our series";
                $diskon = "20% discount from the monthly payments";
            }
            elseif ($transaction->jenis_membership == 3){
                $jenis = "Platinum";
                $waktu = "6 months of full access to all of our series";
                $diskon = "30% discount from the monthly payments";
            }
        }
        return view('user.history.membership',["trans" => $transaction,"jenis" => $jenis,"discord"=>$discord,"watchlist"=>$watchlist,"waktu"=>$waktu, "diskon" => $diskon]);
    }

    //return halaman history transaksi member
    public function transaction(){
        $transaction = [];
        //row id user
        $row_id_user = Auth::id();
        //get datas
        $date_now = date("yy-m-d");
        $date_10=date("yy-m-d", strtotime("$date_now +10 days"));
        $transaction = Transaction::where('row_id_user', '=', $row_id_user)->get();
        return view('user.history.transaction',["trans"=>$transaction,"date"=>$date_now,"date_10"=>$date_10]);
    }

    public function receipt($id){
        $transaction = Transaction::where('id',$id)->get();
        $nomorNota = "N".date("Ymd", strtotime($transaction[0]->created_at)).$transaction[0]->id.$transaction[0]->row_id_user.$transaction[0]->status_transaksi;
        $expire = date("Y-m-d",strtotime($transaction[0]->waktu_expired_membership));
        if($transaction[0]->jenis_membership == 1){
            $jenis = "Silver";
        }
        elseif ($transaction[0]->jenis_membership == 2) {
            $jenis = "Gold";
        }
        elseif ($transaction[0]->jenis_membership == 3){
            $jenis = "Platinum";
        }
        return view('user.history.receipt',["trans"=>$transaction,"nota"=>$nomorNota,"jenis"=>$jenis,"expire"=>$expire]);
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
            $verifyUser = VerifyUser::create([
                'user_id' => $result->id,
                'token' => sha1(time())
            ]);

            $result->notify(new MailVerificationNotification($verifyUser->token));
            return redirect()->route('login')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
        } else {
            return redirect()->back()->with('error', 'Register failed');
        }
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
            return redirect()->route('login')->with('error', "Sorry your email cannot be identified.");
        }
        return redirect()->route('login')->with('success', $status);
    }


    public function sendVerify(){
        $verifyUser = VerifyUser::create([
            'user_id' => Auth::user()->id,
            'token' => sha1(time())
        ]);

        Auth::user()->notify(new MailVerificationNotification($verifyUser->token));
        return redirect()->route('home')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
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

    public function password(){
        return view('profile.change');
    }

    public function passwordSubmit(Request $request){
        $request->validate([
            "new" => "required|string|min:4",
            "confirm" => "required|same:new",
        ]);

        $attr = $request->all();
        $attr['password'] = password_hash($request->new, PASSWORD_DEFAULT);

        if(password_verify($request->old, Auth::user()->password)){
            $result = User::find(Auth::id())->update($attr);
            if ($result) {
                return redirect()->back()->with('success', 'Change password successful');
            } else {
                return redirect()->back()->with('error', 'Change password failed');
            }
        }
        else{
            return redirect()->back()->with('error', 'Old password differ from the account.');
        }
    }

    public function watchlist(){
        $dataUser = User::find(Auth::id());
        $dataSeriesWatchList = $dataUser->watchlist()->paginate(9);

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

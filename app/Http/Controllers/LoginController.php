<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Notifications\MailVerificationNotification;

class LoginController extends Controller
{
    public function adminLoginPage(){
        if(Session::has('admin')){
            return redirect()->route('admin.home');
        }
        else if(Auth::check())
        {
            return redirect()->route('home');
        }
        else{
            return view('auth.admin.login');
        }
    }

    public function forgotPage(){
        return view('auth.forgotpassword');
    }

    public function forgot(Request $request){
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);$request->validate(['email' => 'required|email']);

                    $status = Password::sendResetLink(
                        $request->only('email')
                    );

                    return $status === Password::RESET_LINK_SENT
                                ? back()->with(['status' => __($status)])
                                : back()->withErrors(['email' => __($status)]);
    }

    public function resetPage(){
        return view('auth.resetpassword');
    }

    public function reset(Request $request){
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            "password" => "required|string|min:4",
            "confirm" => "required|same:password",
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();

                $user->setRememberToken(Str::random(60));

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => __($status)]);
    }

    public function login(Request $request) {
        $input = $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

        $remember = $request->remember;

        $user = User::where('username', $request->username)->first();
        if($user != null){
            if($user->banned == 0){
                if (Auth::attempt($request->only(["username", "password"]), $remember)) {
                    return redirect()->route('home');
                } else {
                    return redirect()->back()->with("error", "Login failed");
                }
            }
            else{
                return redirect()->back()->with("error", "Banned user can't login");
            }
        }
        else{
            return redirect()->back()->with("error", "User not found");
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return \redirect()->route('home');
    }
}

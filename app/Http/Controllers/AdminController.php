<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
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
}

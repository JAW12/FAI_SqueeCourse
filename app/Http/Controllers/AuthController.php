<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminLoginPage(){
        return view('auth.admin.login');
    }

    public function forgotPage(){
        return view('auth.forgotpassword');
    }

    public function resetPage(){
        return view('auth.resetpassword');
    }
}

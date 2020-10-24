<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

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
}

<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function home(){
        return view('membership');
    }

    public function form($paket){
        $nama = Auth::user()->nama;
        if($paket == "Silver"){
            $hasil_rupiah = "Rp " . number_format(120000,2,',','.');
            return view('user.payment', ['paket' => $paket, 'harga' => $hasil_rupiah, 'nama' => $nama]);
        }
        if($paket == "Gold"){
            $hasil_rupiah = "Rp " . number_format(288000,2,',','.');
            return view('user.payment', ['paket' => $paket, 'harga' => $hasil_rupiah, 'nama' => $nama]);
        }
        if($paket == "Platinum"){
            $hasil_rupiah = "Rp " . number_format(504000,2,',','.');
            return view('user.payment', ['paket' => $paket, 'harga' => $hasil_rupiah, 'nama' => $nama]);
        }
    }

    public function submit(Request $req,$paket){
        //validasi input
        $validate = $req->validate([
            "name"=>"required",
            "sender"=>"required",
            "destination"=>"not_in:0",
            "date"=>"required|date"
        ]);
        //prepare insert to db
        $transaction = new Transaction();
        $transaction->row_id_user=Auth::id();
        $time = strtotime($validate['date']);
        if($paket == "Silver"){
            $transaction->jenis_membership=1;
            $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+1 month',$time));
            $transaction->total_pembayaran=120000;
        }
        else if($paket == "Gold"){
            $transaction->jenis_membership=2;
            $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+3 month',$time));
            $transaction->total_pembayaran=288000;
        }
        else if($paket == "Platinum"){
            $transaction->jenis_membership=3;
            $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+6 month',$time));
            $transaction->total_pembayaran=504000;
        }
        $transaction->bank_asal=$validate['sender'];
        $transaction->bank_tujuan=$validate['destination'];
        $transaction->status_transaksi=1;

        //lakukan insert
        $result = $transaction->save();

        //kembali ke halaman
        if($result){
            return redirect()->route('home');
        }
    }

    public function accept($id){
        if($id == "all"){
            Transaction::where('status_transaksi',1)->update([
                'status_transaksi'=> 2
            ]);
        }
        else{
            $accept = Transaction::where('id',$id)->first();
            $accept->status_transaksi = 2;
            $accept->save();
        }
        return redirect()->route('transaction.pending');
    }

    public function reject($id){
        if($id == "all"){
            Transaction::where('status_transaksi',1)->update([
                'status_transaksi'=> 3
            ]);
        }
        else{
            $reject = Transaction::where('id',$id)->first();
            $reject->status_transaksi = 3;
            $reject->save();
        }
        return redirect()->route('transaction.pending');
    }
}

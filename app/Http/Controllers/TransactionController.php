<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

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
            "accountSender"=>"required",
            "destination"=>"not_in:0",
            "date"=>"required|date"
        ]);
        //prepare insert to db
        $jum = DB::table('transactions')->max('id');
        $amount = 0;
        $transaction = new Transaction();
        $transaction->row_id_user=Auth::id();
        // $time = strtotime($validate['date']);

        //ubah jd timestamps carbon date
        $time = new Carbon($validate['date']);

        if($paket == "Silver"){
            $transaction->jenis_membership=1;
            // $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+1 month',$time));
            $amount=$transaction->total_pembayaran=120000;

            //carbon date add months
            $time->addMonths(1);

        }
        else if($paket == "Gold"){
            $transaction->jenis_membership=2;
            // $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+3 month',$time));
            $amount=$transaction->total_pembayaran=288000;

            //carbon date add months
            $time->addMonths(3);
        }
        else if($paket == "Platinum"){
            $transaction->jenis_membership=3;
            // $transaction->waktu_expired_membership=date("Y-m-d", strtotime('+6 month',$time));
            $amount=$transaction->total_pembayaran=504000;

            //carbon date add months
            $time->addMonths(6);
        }
        $transaction->bank_asal=$validate['sender'];
        $transaction->nomor_rekening=$validate['accountSender'];
        $transaction->bank_tujuan=$validate['destination'];
        $transaction->status_transaksi=1;

        // carbon date waktu expired
        $transaction->waktu_expired_membership = $time;

        //lakukan insert
        $result = $transaction->save();

        //midtrans
        if($validate['destination'] == "CC"){
        //call function initpayment
        $this-> initPaymentGateway();

        $namaDepan = Auth::user()->nama;
        $namaBelakang = "";
        $params = array(
            "enabled_payments" => ["credit_card"],
            'transaction_details' => [
                'order_id' => ($jum+1),
                'gross_amount' => $amount,
            ],
            'customer_details' => [
                'first_name' => $namaDepan,
                'last_name' => $namaBelakang,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->no_hp
            ]
        );

        // Get Snap Payment Page URL
        $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;

        // Redirect to Snap Payment Page
        return Redirect::to($paymentUrl);
        }
        else{
            if($result){
                return redirect()->route('home');
            }
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

    public function initPaymentGateway()
    {
        //Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        //Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        //Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        ////Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
}

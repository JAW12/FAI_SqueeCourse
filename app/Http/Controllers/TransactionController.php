<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans;

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

        //generate token
        //$token = $this->generatePaymentToken();
        //midtrans
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            )
        );

        // Get Snap Payment Page URL
        $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;

        // Redirect to Snap Payment Page
        header('Location: ' . $paymentUrl);

        //kembali ke halaman
        if($result){
            return redirect()->route('home');
        }
    }


    // public function generatePaymentToken(){
    //     $this->initPaymentGateway();
    //     $nama = Auth::user()->nama;
    //     $namaLengkap[] = explode(" ",$nama);
    //     $namaDepan = "";
    //     $namaBelakang = "";
    //     for ($i=0; $i < count($namaLengkap); $i++) {
    //         if($i == count($namaLengkap)-1){
    //             $namaBelakang = $namaLengkap[$i];
    //         }
    //         else{
    //             $namaDepan = $namaDepan.$namaLengkap[$i]." ";
    //         }
    //     }
    //     $customerDetails = [
    //         'first_name' => $namaDepan,
    //         'last_name' => $namaBelakang,
    //         'email' => Auth::user()->email,
    //         'phone' => Auth::user()->no_hp
    //     ];

    //     $params = [
    //         'enable_payments' => \App\Models
    //     ];
    // }

    public function accept($id){
        if($id == "all"){
            Transaction::where('status_transaksi',1)->update([
                'status_transaksi'=> 2
            ]);
        }
        else{
            $accept = Transaction::where('id',$id)->first();
            $expire=$accept->waktu_expired_membership;
            $accept->status_transaksi = 2;
            $accept->save();
            $accept = Transaction::where('id',$id)->first();
            $accept->waktu_expired_membership=$expire;
            $accept->save();
            dd($expire);
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
            $expire=$reject->waktu_expired_membership;
            $reject->status_transaksi = 3;
            $reject->save();
            $reject = Transaction::where('id',$id)->first();
            $reject->waktu_expired_membership = $expire;
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
        //Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
}

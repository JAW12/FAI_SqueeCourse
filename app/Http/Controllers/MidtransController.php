<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;


class MidtransController extends Controller
{
    public function notification(Request $request)
	{
		// $payload = $request->getContent();
        // $notification = json_decode($payload);
        $id = $request->order_id;

        //$validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . env('MIDTRANS_SERVER_KEY'));
        $this->initPaymentGateway();

        // $paymentNotification = new \Midtrans\Notification();
        // $trans = Transaction::where('id', $paymentNotification->order_id)->firstOrFail();
        // $transaction = $paymentNotification->transaction_status;
        // $type = $paymentNotification->payment_type;
		// $fraud = $paymentNotification->fraud_status;
        // if ($transaction == 'capture') {
		// 	// For credit card transaction, we need to check whether transaction is challenge by FDS or not
		// 	if ($type == 'credit_card') {
		// 		if ($fraud == 'challenge') {
		// 			// TODO set payment status in merchant's database to 'Challenge by FDS'
		// 			// TODO merchant should decide whether this transaction is authorized or not in MAP
		// 			$trans->status_transaksi = 3;
		// 		} else {
		// 			// TODO set payment status in merchant's database to 'Success'
		// 			$trans->status_transaksi = 2;
		// 		}
		// 	}
        // }
        // else{
        //     $trans->status_transaksi = 3;
        // }
        $trans = Transaction::where('id', $id)->firstOrFail();
        $trans->status_transaksi = 2;
        $result = $trans->save();

        //kembali ke halaman
        if($result){
            return redirect()->route('history.transaction');
        }
    }

	/**
	 * Show completed payment status
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function completed(Request $request)
	{
        $id = $request->order_id;
        $this->initPaymentGateway();
        $trans = Transaction::where('id', $id)->firstOrFail();
        $trans->status_transaksi = 2;
        $result = $trans->save();
        if($result){
            return redirect()->route('history.transaction');
        }
	}

	/**
	 * Show unfinish payment page
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function unfinish(Request $request)
	{

	}

	/**
	 * Show failed payment page
	 *
	 * @param Request $request payment data
	 *
	 * @return void
	 */
	public function failed(Request $request)
	{
        $id = $request->order_id;
        $this->initPaymentGateway();
        $trans = Transaction::where('id', $id)->firstOrFail();
        $trans->status_transaksi = 3;
        $result = $trans->save();
        if($result){
            return redirect()->route('history.transaction')->with('error', 'Payment failed');
        }
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

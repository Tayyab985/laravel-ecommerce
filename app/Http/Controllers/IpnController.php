<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IpnController extends Controller
{
    function index(Request $request) {
        
        $paymentId = isset($request['invId']) ? $request['invId'] : '0';
        $status = isset($request['status']) ? $request['status'] : '0';
        $transactionId = isset($request['transactionId']) ? $request['transactionId'] : '';
        $transactionToken = isset($request['token']) ? $request['token'] : '';
        $futueLinkInvId = isset($request['ecomInvId']) ? $request['ecomInvId'] : ''; // Your invoice ID at futuelink
        $amount = isset($request['amount']) ? $request['amount'] : ''; // Amount paid at futuelink
    
        // $e['paymentId'] = $paymentId;
        // $e['status'] = $status;
        // $e['transactionId'] = $transactionId;
        // $e['transactionToken'] = $transactionToken;
        // $e['futueLinkInvId'] = $futueLinkInvId;
        // $e['amount'] = $amount;
        // $e = json_encode($e);

        // $ed = json_decode(utf8_encode($e), true);
        // $ed3 = array();
        $order = Order::where(['user_id' => Auth::user()->id, 'order_number' => $transactionToken])->get()->first();
        
        $tokenSentWithTransaction = $order->order_number; // This is $TOKEN which you sent it at the time of sending order
        $amountYouSent = $order->total_amount; // This is $TOKEN which you sent it at the time of sending order

        if ($status == 'success' && $transactionToken == $tokenSentWithTransaction && $amountYouSent == $amount)
        {
            Order::where(['user_id' => Auth::user()->id, 'order_number' => $transactionToken])->update(['payment_status' => 'paid']);

            Transaction::create([
                'order_number' => $order->order_number,
                'user_id' => Auth::user()->id,
                'amount' => $order->total_amount,
                'invId' => $paymentId,
                'status' => $status,
                'transactionId' => $transactionId,
                'token' => $transactionToken,
                'ecomInvId' => $futueLinkInvId 
            ]);

            session()->forget('cart');
            session()->forget('coupon');
            Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => $order->id]);

            // dd($users);        
            request()->session()->flash('success','Your product successfully placed in order');
            return redirect()->route('home');
        }
    
    }

    public function invioce() {
        request()->session()->flash('success','Your product successfully placed in order');
        return redirect()->route('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpnController extends Controller
{
    function index(Request $request) {
        $paymentId = isset($request['invId']) ? $request['invId'] : '0';
        $status = isset($request['status']) ? $request['status'] : '0';
        $transactionId = isset($request['transactionId']) ? $request['transactionId'] : '';
        $transactionToken = isset($request['token']) ? $request['token'] : '';
        $futueLinkInvId = isset($request['ecomInvId']) ? $request['ecomInvId'] : ''; // Your invoice ID at futuelink
        $amount = isset($request['amount']) ? $request['amount'] : ''; // Amount paid at futuelink
    
        $e['paymentId'] = $paymentId;
        $e['status'] = $status;
        $e['transactionId'] = $transactionId;
        $e['transactionToken'] = $transactionToken;
        $e['futueLinkInvId'] = $futueLinkInvId;
        $e['amount'] = $amount;
        $e = json_encode($e);

        $ed = json_decode(utf8_encode($e), true);
        $ed3 = array();

        $tokenSentWithTransaction = 'XXXXXXXXXXXXXXXXXXXX'; // This is $TOKEN which you sent it at the time of sending order
        $amountYouSent = 'XXXXXXXXXXXXXXXXXXXX'; // This is $TOKEN which you sent it at the time of sending order

        if ($status == 'success' && $transactionToken == $tokenSentWithTransaction && $amountYouSent == $amount)
        {
            // YOUR CODE interms of success!
        }
    
    }
}

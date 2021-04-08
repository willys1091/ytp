<?php

namespace App\Http\Controllers\Payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    /**
     * page if payment is successful
     * 
     * @return view
     */
    public function finish(Request $request)
    {
        return view('payment.payment-success');
    }

    /**
     * page if payment is error
     * 
     * @return view
     */
    public function error(Request $request)
    {
        return view('payment.payment-error');
    }
}

<?php

namespace App\Http\Controllers\Payment;

use Midtrans;
use App\Models\Charity;
use App\Models\Guest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransController extends Controller
{
    /**
     * Donation function
     * 
     * @return response
     */
    public function donate(Request $request)
    {
        $input = $request->all();

        $input['donation_id'] = Charity::getCharityKey();
        $input['status'] = "UNPAID";

        $guest = Guest::create($input);
        $donation = $guest->charities()->create($input);

        $transaction_details = [
            'order_id' => $donation->donation_id,
            'gross_amount' => $donation->donation_amount
        ];
        
        $customer_details = [
            'first_name' => $guest->full_name,
            'email' => $guest->email,
            'phone' => $guest->phone_number
        ];
        
        $custom_expiry = [
            'start_time' => date("Y-m-d H:i:s O", time()),
            'unit' => 'day',
            'duration' => 2
        ];
        
        $item_details = [
            'id' => $donation->donation_id,
            'quantity' => 1,
            'name' => 'Donation Tangan Pengharapan #'.$donation->donation_id,
            'price' => $donation->donation_amount
        ];

        // Send this options if you use 3Ds in credit card request
        $credit_card_option = [
            'secure' => true, 
            'channel' => 'migs'
        ];

        $transaction_data = [
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
            'customer_details' => $customer_details,
            // 'expiry' => $custom_expiry,
            // 'credit_card' => $credit_card_option,
        ];

        $token = Midtrans::getSnapToken($transaction_data);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => [
                'token' => $token
            ]
        ]);
    }
}

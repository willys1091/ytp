<?php

namespace App\Http\Controllers\Api;

use Mail;
use Log;
use Midtrans;
use App\Models\Charity;
use App\Models\MidtransResponse;
use App\Mail\NotificationFailedMail;
use App\Mail\NotificationSuccessMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MidtransResponseController extends Controller
{
    /**
     * Handle midtrans notification
     * 
     * @return response
     */
    public function notification(Request $request)
    {
        $input = $request->all();

        Log::info('input');
        Log::info(json_encode($input));

        if(!is_null($input['order_id'])){
            $response = Midtrans::status($input['order_id']);
            $response = json_decode(json_encode($response), true);
            $response['raw_data'] = json_encode($response);

            if($response['status_code'] == 200){
                
                $response['charity_id'] = null;
                $midtransResponse = MidtransResponse::create($response);

                if(isset($response['channel_response_message']) && $response['channel_response_message'] == "Approved"){
                    $charity = Charity::where('donation_id', $response['order_id'])->first();
                    $midtransResponse->charity_id = $charity->id;
                    $midtransResponse->update();

                    if($response['transaction_status'] == "settlement" || $response['transaction_status'] == "capture"){

                        Mail::to($charity->guests->email, $charity->guests->full_name)
                            ->bcc(config('mail.bcc'))
                            ->send(new NotificationSuccessMail($charity));

                        $charity->update(['status' => 'PAID']);

                    }else if($response['transaction_status'] == "authorize" || $response['transaction_status'] ==  "pending"){
                        $charity = Charity::where('donation_id', $response['order_id'])->update(['status' => 'UNPAID']);
                    }else{
                        $charity = Charity::where('donation_id', $response['order_id'])->first();

                        Mail::to($charity->guests->email, $charity->guests->full_name)
                            ->bcc(config('mail.bcc'))
                            ->send(new NotificationFailedMail($charity));

                        $charity->update(['status' => 'VOID']);
                    }
                }
            }
        }

        dd($input);
    }
}

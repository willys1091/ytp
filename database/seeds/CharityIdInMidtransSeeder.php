<?php

use App\Models\Charity;
use App\Models\MidtransResponse;
use Illuminate\Database\Seeder;

class CharityIdInMidtransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MidtransResponse::chunk(50, function($responses){
            foreach($responses as $response){
                $charity = Charity::where('donation_id', $response->order_id)->first();

                if(!$charity){
                    continue;
                }

                $response->update(['charity_id' => $charity->id]);
            }
        });
    }
}

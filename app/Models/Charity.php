<?php

namespace App\Models;

use Log;
use Carbon\Carbon;
use App\Models\Guest;
use App\Models\CharityCategory;
use App\Models\MidtransResponse;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Charity extends Model
{
    // use SoftDeletes;

    protected $table = "charities";

    protected $fillable = [
        'guest_id',
        'charity_category_id',
        'donation_id',
        'donation_amount',
        'bank_name',
        'account_number',
        'bank_destination',
        'message',
        'status'
    ];

    // Relationship
    public function charityCategory()
    {
        return $this->belongsTo(CharityCategory::class, 'charity_category_id');
    }

    public function guests()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function midtrans()
    {
        return $this->hasMany(MidtransResponse::class, 'charity_id');
    }

    // Method
    public static function getCharityKey()
    {
        $prefix = "YTP";
        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');
        $day = Carbon::now()->format('d');
        $charityCount = Charity::all()->count();
        $charityCount++;

        if($charityCount == 0){
            $charityCount = "0000";
        }else if($charityCount >= 0 && $charityCount < 9){
            $charityCount = "000".$charityCount;
        }else if($charityCount >= 9 && $charityCount < 100){
            $charityCount = "00".$charityCount;
        }else if($charityCount >= 100 && $charityCount < 1000){
            $charityCount = "0".$charityCount;
        }else if($charityCount >= 1000 && $charityCount < 10000){
            $charityCount = $charityCount;
        }

        return $prefix.$year.$month.$day.$charityCount;
    }
}

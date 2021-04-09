<?php

namespace App\Models;

use Log;
use App\Models\Charity;
use Illuminate\Database\Eloquent\Model;

class CharityCategory extends Model{
    // use SoftDeletes;
    protected $table = "chairity";

    // protected $fillable = [
    //     'donation_id',
    //     'donation_type',
    //     'donation_amount',
    //     'bank_name',
    //     'account_number',
    //     'bank_destination',
    //     'message',
    // ];

    // public function charities()
    // {
    //     return $this->hasMany(Charity::class, 'charity_category_id');
    // }
}

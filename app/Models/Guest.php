<?php

namespace App\Models;

use Log;
use App\Models\Charity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guest extends Model
{
    // use SoftDeletes;

    protected $table = "guests";

    protected $fillable = [
        'full_name',
        'email',
        'phone_number'
    ];

    public function charities()
    {
        return $this->hasMany(Charity::class, 'guest_id');
    }
}

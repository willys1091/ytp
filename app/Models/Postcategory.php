<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Postcategory extends Model{
    // use SoftDeletes;
    protected $table = "postcategory"; 

    public function post(){
        return $this->hasOne('App\Models\Post');
    }
}

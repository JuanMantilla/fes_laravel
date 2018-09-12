<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardinal_point extends Model
{
    protected $fillable = [
        'latitude', 'longitude'
    ];
}

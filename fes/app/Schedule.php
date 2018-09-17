<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'departure_time', 'enlistment_time', 'day'
    ];

    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}

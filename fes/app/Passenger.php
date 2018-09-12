<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
        'destiny', 'arrival_time', 'bus_stop', 'waiting_time'
    ];

    public function bus()
    {
        return $this->belongsTo('App\Bus');
    }
}

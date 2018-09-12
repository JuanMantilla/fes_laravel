<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'default_enlistment_time', 'travel_time', 'start_time', 'finish_time', 'name', 'start_point', 'finish_point'
    ];

    public function buses()
    {
        return $this->hasMany('App\Bus');
    }
}

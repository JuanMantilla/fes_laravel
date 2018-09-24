<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'current_capacity', 'max_capacity', 'min_capacity', 'name'
    ];

    public function passengers()
    {
        return $this->hasMany('App\Passenger');
    }

    public function demands()
    {
        return $this->hasMany('App\Demand');
    }

    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}

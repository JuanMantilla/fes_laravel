<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'day', 'hour', 'quantity'
    ];

    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}

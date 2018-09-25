<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Bus;

class BusesController extends Controller
{
    public function create_from_route(Request $request){
        $route_id = (int)$request->input('route');
        $demands = Route::find($route_id)->demands;
        $buses = array();
        foreach ($demands as $demand){
            array_push($buses,$this->calculate_buses($demand->quantity, 50));

        }
        $number_of_buses = max($buses);
        for ($i = 0; $i < $number_of_buses; $i++ ){
            $bus = new Bus();
            $bus->current_capacity=50;
            $bus->max_capacity=50;
            $bus->min_capacity=1;
            $bus->name='X'.$i;
            $bus->route_id=1;
            $bus->save();
        }
        return redirect('home');
    }

    public function calculate_buses($demand, $max_capacity)
    {
        return (int)ceil($demand / $max_capacity);
    }
}

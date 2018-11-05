<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Bus;

class BusesController extends Controller
{
    public function create_from_route(Request $request)
    {
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);
        $demands = $route->demands;
        $buses = array();
        foreach ($demands as $demand) {
            array_push($buses, $this->calculate_buses($demand->quantity,
                                                             50,
                                                             $route->calculate_travel_time(),
                                                             $route->default_enlistment_time,
                                                             60));

        }
        $number_of_buses = max($buses);
        for ($i = 0; $i < $number_of_buses; $i++) {
            $bus = new Bus();
            $bus->current_capacity = 50;
            $bus->max_capacity = 50;
            $bus->min_capacity = 1;
            $bus->name = $route->name.' bus '.$i;
            $bus->route_id = $route_id;
            $bus->save();
        }
        return redirect('home');
    }

    public function create_fixed_buses(Request $request)
    {
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);

        $number_of_buses = $request->input('bus_quantity');
        for ($i = 0; $i < $number_of_buses; $i++) {
            $bus = new Bus();
            $bus->current_capacity = 50;
            $bus->max_capacity = 50;
            $bus->min_capacity = 1;
            $bus->name = $route->name.' bus '.$i;
            $bus->route_id = $route_id;
            $bus->save();
        }
        return redirect('home');
    }

    public function create_percentage_buses(Request $request)
    {
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);
        $demands = $route->demands()->get();
        $whole_demand = $demands->count();
        $percentage = (int)$request->input('demand_percentage') / 100;
        $percentage_demand = floor($percentage * $whole_demand);
        $message = 'The route '.$percentage.' already exists.';
        echo "<script type='text/javascript'>alert('$message');</script>";
        $iterator = 0;
        $buses = array();
        foreach ($demands as $demand) {
            if ($iterator == $percentage_demand){
                break;
            }
            array_push($buses, $this->calculate_buses($demand->quantity,
                50,
                $route->calculate_travel_time(),
                $route->default_enlistment_time,
                60));
            $iterator++;
        }
        $number_of_buses = max($buses);
        for ($i = 0; $i < $number_of_buses; $i++) {
            $bus = new Bus();
            $bus->current_capacity = 50;
            $bus->max_capacity = 50;
            $bus->min_capacity = 1;
            $bus->name = $route->name.' bus '.$i;
            $bus->route_id = $route_id;
            $bus->save();
        }
        return redirect('home');
    }

    public function calculate_buses($demand, $max_capacity_bus, $th, $et, $t)
    {
        $travels_bus_hour = $t/($th+$et);
        $travels_hour_needed = $demand / $max_capacity_bus;
        return (int)ceil($travels_hour_needed / $travels_bus_hour);
    }
}

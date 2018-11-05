<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Schedule;
use DateTime;
use DateInterval;

class ScheduleController extends Controller
{
    public function store_schedule(Request $request)
    {
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);
        $demands = $route->demands()->get();

        $travel_time = ((int)$route->calculate_travel_time()) * 2;
        foreach ($demands as $demand) {
            $buses = $route->buses()->where('current_capacity', '>', 1)->get();
            $hour_date = DateTime::createFromFormat('H:i:s', ($demand->hour));
            $departure_time = $this->calculate_dt(
                $route->default_enlistment_time,
                $travel_time, sizeof($buses));

            foreach ($buses as $bus) {

                    if ($demand->quantity < $bus->current_capacity and $demand->quantity > 0){
                        $bus->current_capacity -= $demand->quantity;
                        $demand->quantity = 0;
                        $schedule = new Schedule();
                        $hour_date->add(new DateInterval('PT' . $departure_time . 'M'));
                        $schedule->departure_time = $hour_date;
                        $schedule->enlistment_time = $route->default_enlistment_time;
                        $schedule->day = $demand->day;
                        $schedule->bus_id = $bus->id;
                        $schedule->route_id = $route->id;
                        $schedule->save();
                        break;
                    }
                    elseif ($demand->quantity > 0) {
                        $demand->quantity = $demand->quantity - $bus->current_capacity;
                        $bus->current_capacity = 0;
                        $schedule = new Schedule();
                        $hour_date->add(new DateInterval('PT' . $departure_time . 'M'));
                        $schedule->departure_time = $hour_date;
                        $schedule->enlistment_time = $route->default_enlistment_time;
                        $schedule->day = $demand->day;
                        $schedule->bus_id = $bus->id;
                        $schedule->route_id = $route->id;
                        $schedule->save();
                    }
            }
        }
        return redirect('home');
    }

    public function show_schedule(Request $request){
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);
        $schedules = $route->schedules;
        return view('show_schedules', ['schedules' => $schedules, 'route' => $route]);
    }

    public function calculate_dt($enlistment_time, $travel_time, $buses)
    {
        return (int)ceil(($enlistment_time + $travel_time) / $buses);
    }
}

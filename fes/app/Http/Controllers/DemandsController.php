<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Collection;
use App\Schedule;
use App\Bus;
use App\Route;
use App\Demand;
class DemandsController extends Controller
{
    private function demand(){
        $demand = [
            'monday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ],

            'tuesday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ],
            'thursday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ],

            'wednesday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ],


            'friday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ],

            'saturday' => [
                '0700' => 0,
                '0800' => 0,
                '0900' => 0,
                '1000' => 0,
                '1100' => 0,
                '1200' => 0,
                '1300' => 0,
                '1400' => 0,
                '1500' => 0,
                '1600' => 0,
                '1700' => 0,
                '1800' => 0,
                '1900' => 0,
                '2000' => 0,
                '2100' => 0,
                '2200' => 0,
                '2300' => 0
            ]
        ];

        return $demand;
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $path = 'storage/app/'.$request->file('demand')->storeAs('demands', 'demand.csv');
        $route = Route::find(1)->get()->first();
        $data = Excel::load($path, function($reader) {
        })->get();
        if(!empty($data) && $data->count()){
            foreach ($data as $line) {
                $quantity = 0;
                foreach ($line as $key=>$value){
                    if ($key == 'quantity'){
                        $quantity = $value;
                    }
                    elseif ($value){
                        $hour = explode("-", $value)[0];
                        $demand = new Demand();
                        $demand->day = $key;
                        $demand->hour = $hour;
                        $demand->quantity = $quantity;
                        $demand->route_id = $route->id;
                        $demand->save();
                    }
                }
            }
        }
        
        

//        $buses = array();
//        foreach ($demand as $day=>$hour){
//            foreach ($hour as $hour=>$quantity){
//                array_push($buses,$this->calculate_buses($quantity, 50));
//            }
//        }
//        $number_of_buses = max($buses);
//        for ($i = 0; $i < $number_of_buses; $i++ ){
//            $bus = new Bus();
//            $bus->current_capacity=50;
//            $bus->max_capacity=50;
//            $bus->min_capacity=1;
//            $bus->name='X'.$i;
//            $bus->route_id=1;
//            $bus->save();
//        }
//
//        $route = Route::find(1)->get();
//        $buses = $route->buses()->get();
//        $travel_time =  ((int)$route->calculate_travel_time()/60)*2;
//        foreach ($demand as $day=>$hour){
//            foreach ($hour as $hour=>$quantity){
//                foreach ($buses as $bus)
//                    for ($i = 0; $i < $quantity; $i++ ){
//                        if ($bus->current_capacity > 1) {
//                            $bus->current_capacity -= 1;
//                        }
//                        else{
//                            break;
//                    }
//                    $schedule = new Schedule();
//                    $schedule->departure_time = ($route->default_enlistment_time+$travel_time)/sizeof($buses);
//                    $schedule->enlistment_time = $route->default_enlistment_time;
//                    $schedule->day = $day;
//                    $schedule->bus_id = $bus->id;
//                    $schedule->save();
//                }
//            }
//        }

    }

    public function calculate_buses($demand, $max_capacity){
        return (int)ceil($demand/$max_capacity);


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Collection;
use App\Schedule;
use App\Bus;
use App\Route;
use App\Demand;
use DateTime;
class DemandsController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $path = 'storage/app/'.$request->file('demand')->storeAs('demands', 'demand.csv');
        $route_id = (int)$request->input('route');
        $route = Route::find($route_id);
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
                        $hour = str_split($hour);
                        $hour = $hour[0].$hour[1].":00:00";
                        $hour = DateTime::createFromFormat('H:i:s', ($hour));
                        try {
                            $demand = Demand::where('day', $key)
                                ->where('hour', $hour)->firstOrFail();
                        }
                        catch (\Exception $e){
                            $demand = new Demand();
                        }
                        $demand->day = $key;
                        $demand->hour = $hour;
                        $demand->quantity += $quantity;
                        $demand->route_id = $route->id;
                        $demand->save();
                    }
                }
            }
        }
        return redirect('home');

    }

}

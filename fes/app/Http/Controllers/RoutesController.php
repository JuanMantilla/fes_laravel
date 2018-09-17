<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Location;

class RoutesController extends Controller
{
    public function create(Request $request){
        $route = new Route();
        $route->name = $request->input('name');
        $route->default_enlistment_time = $request->input('default_enlistment_time');
        $route->start_time = $request->input('start_time');
        $route->finish_time = $request->input('finish_time');
        $route->origin = $request->input('start_point');
        $route->destiny = $request->input('finish_point');

        $route->set_locations();
        try{
            $route->save();
        }catch (\Illuminate\Database\QueryException $e){
            $message = 'The route '.$route->name.' already exists.';
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

        return redirect('home')->with('route' , $route);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;

class RoutesController extends Controller
{
    public function create(Request $request){
        $route = Route::create([
            'default_enlistment_time' => $request->input('default_enlistment_time'),
            'travel_time' => $request->input('travel_time'),
            'start_time' => date("H:i:s", strtotime($request->input('start_time '))),
            'name' => $request->input('name'),
            'start_point' => $request->input('start_point'),
            'finish_point' => $request->input('finish_point'),
            'finish_time' => date("H:i:s", strtotime($request->input('finish_time')))
        ]);
        return redirect('home')->with('route' , $route);
    }
}

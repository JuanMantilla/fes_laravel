<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Route extends Model
{
    protected $fillable = [
        'default_enlistment_time', 'start_time', 'finish_time', 'name', 'origin', 'destiny',
        'from', 'to', 'distance'
    ];

    public function set_locations()
    {
//        $api_key = 'AIzaSyBXInnwowGWskdjrHUynUlakjOkgitPRLk';
//        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.$this->origin.
//            '&destinations='.$this->destiny.'&key='.$api_key;
//        $response = json_decode(file_get_contents($url), true);

        $this->distance = "123";//$response['rows'][0]['elements'][0]['distance']['value'];
        $this->from = "qwdeqipj";//$response['destination_addresses'][0];
        $this->to = "asdouh";//$response['origin_addresses'][0];
    }

    public function demands()
    {
        return $this->hasMany('App\Demand');
    }

    public function buses()
    {
        return $this->hasMany('App\Bus');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule');
    }


    public function calculate_travel_time(){
        $api_key = 'AIzaSyBXInnwowGWskdjrHUynUlakjOkgitPRLk';
        $url = 'https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins='.$this->origin.
               '&destinations='.$this->destiny.'&key='.$api_key;

        $response = json_decode(file_get_contents($url), true);
        return(($response['rows'][0]['elements'][0]['duration']['value'])/60);
    }


}

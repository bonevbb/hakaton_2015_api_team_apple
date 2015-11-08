<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input_value = Input::get('location');
        //$input_value = 'Ruse';
        //dd($input_value);

        if (!empty($input_value)) {
            $url = 'http://api.openweathermap.org/data/2.5/weather?q="' . $input_value . '"&units=metric&APPID=8f39d3a265aac756b09df424ec8ad9b9';
            $url_apixu = 'http://api.apixu.com/v1/current.json?key=1af3841ea9454f569ec224654150711&q="' . $input_value . '"';
        }
        else{
            $url = 'http://api.openweathermap.org/data/2.5/weather?q=Ruse&units=metric&APPID=8f39d3a265aac756b09df424ec8ad9b9';
            $url_apixu = 'http://api.apixu.com/v1/current.json?key=1af3841ea9454f569ec224654150711&q=Ruse';
        }

        $json = json_decode(file_get_contents($url), true);
        $lon = $json['coord']['lon'];
        $lat = $json['coord']['lat'];
        $url_third = 'https://api.forecast.io/forecast/4818083bd3c1fffea7281f5c14e2f090/' . $lat . ','.$lon.'?units=si';
        //$url = 'https://api.forecast.io/forecast/4818083bd3c1fffea7281f5c14e2f090/43.86,25.97?units=si';
        $json_third = json_decode(file_get_contents($url_third), true);
        $json_apixu = json_decode(file_get_contents($url_apixu), true);
        $city_temp_apixu = $json_apixu['current']['temp_c'];
        $city_temp = $json['main']['temp'];
        $city_temp_third = $json_third['currently']['temperature'];
        $pressure = $json['main']['pressure'];
        $pressure_apixu = $json_apixu['current']['pressure_mb'];
        $pressure_third = $json_third['currently']['pressure'];
        $name = $json['name'];
        $icon = $json['weather'][0]['icon'];
        $weather = $json['weather'][0]['main'];
        $weather_description = $json['weather'][0]['description'];
        
        $new_value = ($city_temp + $city_temp_apixu + $city_temp_third)/3;
        $pressure_new = ($pressure + $pressure_apixu + $pressure_third)/3;
        //dd($json_third['currently']['temperature']);

        return view('pages.pageone')->with([
            'city_temp' => $city_temp,
            'pressure' => $pressure,
            'pressure_apixu' => $pressure_apixu,
            'name' => $name,
            'icon' => $icon,
            'city_temp_apixu' => $city_temp_apixu,
            'weather' => $weather,
            'weather_description' => $weather_description,
            'city_temp_third' => $city_temp_third,
            'pressure_third' => $pressure_third,
            'new_value_temp' => $new_value,
            'pressure_new' => $pressure_new
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('location');
        print_r($name);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function contact()
    {
        return 'My contact page';
    }
}

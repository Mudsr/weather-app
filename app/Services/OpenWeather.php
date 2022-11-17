<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\Http;

class OpenWeather
{
    const API_URL='https://api.openweathermap.org/data/2.5/weather';

    public function __construct() {
        if(!config('weather.key')) {
            throw new Exception('Open Weather api key does not exist. Please add your key');
        }
    }

    public function apiCall(string $lon, string $lat)
    {
        return Http::get(static::API_URL, [
            'lon' => $lon,
            'lat' => $lat,
            'appid' => config('weather.key'),
            'units' => 'metric'
        ]);
    }

    public function currentWeather(string $lon, string $lat)
    {
        return $this->apiCall($lon, $lat)->json();
    }

    public function allCitiesWeather()
    {
        # code...
    }

}

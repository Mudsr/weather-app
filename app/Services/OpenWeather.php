<?php

namespace App\Services;

use Exception;

class OpenWeather
{
    const API_URL=' https://api.openweathermap.org/data/2.5/weather';

    public function __construct() {
        if(!config('weather.key')) {
            throw new Exception('Open Weather api key does not exist. Please add your key');
        }
    }

    public function FunctionName(Type $var = null)
    {
        # code...
    }
}

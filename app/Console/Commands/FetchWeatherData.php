<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Services\OpenWeather;
use Illuminate\Console\Command;

class FetchWeatherData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:weather';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to fecth weather data of different citites';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $openWeather = new OpenWeather();
        $cities = City::all();

        foreach ($cities as $city) {
            $detail = $openWeather->currentWeather($city->lon, $city->lat);
            // dd($detail['wind']['speed']);

            $city->weather()->create([
                'condition' => $detail['weather'][0]['main'],
                'icon' => $detail['weather'][0]['icon'],
                'temperature' => $detail['main']['temp'],
                'feels_like' => $detail['main']['feels_like'],
                'humidity' => $detail['main']['humidity'],
                'wind_speed' => $detail['wind']['speed']
            ]);
        }

        return Command::SUCCESS;
    }
}

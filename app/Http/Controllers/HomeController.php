<?php

namespace App\Http\Controllers;

use App\Models\City;
use Inertia\Inertia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Dashboard', [
            'cities' => fn () => City::whereHas('weather')->with('country', 'weather', 'latestWeather')->get(),
        ]);
    }
}

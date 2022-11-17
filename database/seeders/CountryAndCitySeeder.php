<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CountryAndCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            'UAE' => [
                'name' => 'United Arab Emirated',
                'cities' => [
                    [
                        'name' => 'Abu Dhabi',
                        'lat' => '24.4539',
                        'lon' => '54.3773',

                    ],
                    [
                        'name' => 'Dubai',
                        'lat' => '25.2048',
                        'lon' => '55.2708',
                    ],
                    [
                        'name' => 'Sharjah',
                        'lat' => '25.3462',
                        'lon' => '55.4211',

                    ],
                ],
            ],

            'UK' => [
                'name' => 'United Kingdom',
                'cities' => [
                    [
                        'name' => 'London',
                        'lat' => '51.5072',
                        'lon' => '0.1276',

                    ],
                ],
            ],
            'USA' => [
                'name' => 'United States',
                'cities' => [
                    [
                        'name' => 'New York',
                        'lat' => '40.7128',
                        'lon' => '74.0060',

                    ],
                ],
            ],
            'Japan' => [
                'name' => 'Japan',
                'cities' => [
                    [
                        'name' => 'Tokyo',
                        'lat' => '35.6762',
                        'lon' => '139.6503',

                    ],
                ],
            ],
        ];

        Schema::disableForeignKeyConstraints();
        Country::truncate();
        City::truncate();

        foreach ($countries as $key => $data) {

            $country = Country::create([
                'name' => $data['name'],
                'iso' => $key,
            ]);

            foreach ($data['cities'] as $key =>  $city) {
                $country->cities()->create([
                    'name' => $city['name'],
                    'lon' => $city['lon'],
                    'lat' => $city['lat'],
                ]);
            }
        }

        Schema::enableForeignKeyConstraints();
    }
}

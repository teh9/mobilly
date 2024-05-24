<?php

namespace Database\Factories\Modules\Wether\Models;

use App\Modules\Wether\Models\Stations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class StationsFactory extends Factory
{
    protected $model = Stations::class;

    public function definition()
    {
        return [
            'station_id' => Str::random(8),
            'name' => fake()->name(),
            'wmo_id' => fake()->randomNumber(),
            'begin_date' => now(),
            'end_date' => now(),
            'latitude' => fake()->latitude(0, 500000),
            'longitude' => fake()->longitude(0, 500000),
            'gauss1' => fake()->randomFloat(2, 50, 100),
            'gauss2' => fake()->randomFloat(2, 50, 100),
            'geogr1' => fake()->randomFloat(6, 100, 500),
            'geogr2' => fake()->randomFloat(6, 100, 500),
            'elevation' => fake()->randomFloat(2, 20, 100),
            'elevation_pressure' => fake()->randomFloat(2, 20, 100),
        ];
    }
}

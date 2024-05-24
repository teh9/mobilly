<?php

namespace App\Modules\Wether\Models;

use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'station_id',
        'name',
        'wmo_id',
        'begin_date',
        'end_date',
        'latitude',
        'longitude',
        'gauss1',
        'gauss2',
        'geogr1',
        'geogr2',
        'elevation',
        'elevation_pressure',
    ];
}

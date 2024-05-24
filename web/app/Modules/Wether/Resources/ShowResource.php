<?php

namespace App\Modules\Wether\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowResource extends JsonResource
{
    public function toArray(Request $request)
    {
        if (is_null($this->resource)) {
            return [
                'status' => true,
                'data' => [],
            ];
        }

        return [
            'status' => true,
            'data' => [
                'id' => $this->id,
                'station_id' => $this->station_id,
                'name' => $this->name,
                'wmo_id' => $this->wmo_id,
                'begin_date' => $this->begin_date,
                'end_date' => $this->end_date,
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
                'gauss1' => $this->gauss1,
                'gauss2' => $this->gauss2,
                'geogr1' => (float)$this->geogr1,
                'geogr2' => (float)$this->geogr2,
                'elevation' => (float)$this->elevation,
                'elevation_pressure' => (float)$this->elevation_pressure,
            ],
        ];
    }
}

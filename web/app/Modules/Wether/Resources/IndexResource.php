<?php

namespace App\Modules\Wether\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class IndexResource extends ResourceCollection
{
    public function toArray(Request $request): array
    {
        return [
            'status' => true,
            'data' => $this->collection->transform( function ($station) {
                return [
                    'station_id' => $station->station_id,
                    'name' => $station->name,
                ];
            })
        ];
    }
}

<?php

namespace Tests\Feature;

use App\Modules\Wether\Models\Stations;
use Tests\TestCase;

class StationTest extends TestCase
{
    public function testGetAllStations(): void
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . env('API_KEY'),
        ])->get('/api/stations');

        $response->assertStatus(200);
    }

    public function testGetStationById(): void
    {
        $station = Stations::factory()->create();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer ' . env('API_KEY'),
        ])->get('/api/stations/' . $station->station_id);

        $response->assertStatus(200);

        $station->delete();
    }

    public function testGetAllStationsWithoutBearer(): void
    {
        $response = $this->get('/api/stations');

        $response->assertStatus(401);
    }
}

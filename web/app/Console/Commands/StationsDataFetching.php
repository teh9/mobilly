<?php

namespace App\Console\Commands;

use App\Modules\Wether\DTO\RefreshStationDTO;
use App\Modules\Wether\Models\Stations;
use App\Modules\Wether\Services\WetherApiService;
use Illuminate\Console\Command;

class StationsDataFetching extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:stations-data-fetching';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(WetherApiService $service): void
    {
        $response = $service->fetch();

        if (!$response['success'] || !isset($response['result']['records'])) return;

        $records = $response['result']['records'];

        foreach ($records as $record) {
            Stations::updateOrCreate(
                ['station_id' => $record['STATION_ID']], 
                (new RefreshStationDTO($record))->getAsArray()
            );
        }

        return;
    }
}

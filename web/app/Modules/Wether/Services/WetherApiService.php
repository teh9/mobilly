<?php

namespace App\Modules\Wether\Services;

use Illuminate\Support\Facades\Http;

class WetherApiService
{
    protected $host = 'https://data.gov.lv/dati/lv/api/3/action/datastore_search';

    protected $resourceId = 'c32c7afd-0d05-44fd-8b24-1de85b4bf11d';

    public function fetch(): array
    {
        $response = Http::get($this->host, [
            'resource_id' => $this->resourceId
        ]);

        return $response->json();
    }
}

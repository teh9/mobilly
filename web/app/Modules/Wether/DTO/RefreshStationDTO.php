<?php

namespace App\Modules\Wether\DTO;

use App\Modules\Support\Traits\DTOArray;

class RefreshStationDTO
{
    use DTOArray;

    private string $name;

    private int $wmo_id;

    private string $begin_date;
    
    private string $end_date;
    
    private int $latitude;
    
    private int $longitude;

    private float $gauss1;

    private float $gauss2;

    private float $geogr1;

    private float $geogr2;

    private float $elevation;

    private float $elevation_pressure;

    public function __construct(array $data)
    {
        $this->name = $data['NAME'];
        $this->wmo_id = $data['WMO_ID'];
        $this->begin_date = $data['BEGIN_DATE'];
        $this->end_date = $data['END_DATE'];
        $this->latitude = $data['LATITUDE'];
        $this->longitude = $data['LONGITUDE'];
        $this->gauss1 = (float)$data['GAUSS1'];        
        $this->gauss2 = (float)$data['GAUSS2'];        
        $this->geogr1 = (float)$data['GEOGR1'];
        $this->geogr2 = (float)$data['GEOGR2'];
        $this->elevation = (float)$data['ELEVATION'];
        $this->elevation_pressure = (float)$data['ELEVATION_PRESSURE'];
    }
}

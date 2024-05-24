<?php

namespace App\Modules\Wether\Repositories;

use App\Modules\Wether\Models\Stations;
use Illuminate\Database\Eloquent\Collection;

class StationsRepository
{
    protected Stations $model;

    public function __construct()
    {
        $this->model = new Stations;
    }

    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getById(string $id): Stations|null
    {
        return $this->model->whereStationId($id)->first();
    }
}

<?php

namespace App\Modules\Wether\Http\Controllers;

use App\Modules\Wether\Repositories\StationsRepository;
use App\Modules\Wether\Resources\IndexResource;
use App\Modules\Wether\Resources\ShowResource;
use Illuminate\Routing\Controller;

class StationsController extends Controller
{
    public function index(StationsRepository $repository): \App\Modules\Wether\Resources\IndexResource
    {
        return new IndexResource($repository->getAll());
    }

    public function show(StationsRepository $repository, string $id): \App\Modules\Wether\Resources\ShowResource
    {
        return new ShowResource($repository->getById($id));
    }
}

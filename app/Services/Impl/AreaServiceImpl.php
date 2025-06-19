<?php

namespace App\Services\Impl;

use App\Models\Area;
use App\Services\AreaService;

class AreaServiceImpl implements AreaService
{
    public function store(array $data): mixed
    {
        return Area::create($data);
    } 
}

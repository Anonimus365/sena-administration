<?php

namespace App\Services\Impl;

use App\Models\TrainingCenter;
use App\Services\CenterService;

class CenterServiceImpl implements CenterService
{
    public function store(array $data): mixed
    {
        return TrainingCenter::create($data);
    }
}

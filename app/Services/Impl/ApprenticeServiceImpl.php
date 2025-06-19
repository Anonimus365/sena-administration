<?php

namespace App\Services\Impl;

use App\Models\Apprentice;
use App\Services\ApprenticeService;

class ApprenticeServiceImpl implements ApprenticeService
{
    public function store(array $data): mixed
    {
        return Apprentice::create($data);
    }
}

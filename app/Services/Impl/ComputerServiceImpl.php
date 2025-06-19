<?php

namespace App\Services\Impl;

use App\Models\Computer;
use App\Services\ComputerService;

class ComputerServiceImpl implements ComputerService
{
    public function store(array $data): mixed{
        return Computer::create($data);
    }
}

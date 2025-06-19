<?php

namespace App\Services\Impl;

use App\Models\Course;
use App\Services\CourseService;

class CourseServiceImpl implements CourseService
{
    public function store(array $data): mixed
    {
        return Course::create($data);
    }
}

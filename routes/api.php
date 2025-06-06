<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('areas', AreaController::class);

Route::apiResource('centers', TrainingCenter::class);

Route::apiResource('computers', ComputerController::class);
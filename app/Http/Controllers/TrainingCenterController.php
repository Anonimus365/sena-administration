<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use App\Services\CenterService;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{

    protected $centerService;

    public function __construct(CenterService $centerService)
    {
        $this->centerService = $centerService;
    }

    public function index()
    {
        $centers = TrainingCenter::query()
        ->included()
        ->filter()
        ->get();
        return response()->json($centers);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'location' => 'required|string',
        ]);

        $center = $this->centerService->store($validated);
        return response()->json($center, 201);
    }

    public function show($id)
    {

    }

    public function update(Request $request, TrainingCenter $trainingCenter)
    {
        //
    }

    public function destroy(TrainingCenter $trainingCenter)
    {
        //
    }
}

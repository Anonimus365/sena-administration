<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Services\AreaService;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    protected $areaService;

    public function __construct(AreaService $areaService)
    {
        $this->areaService = $areaService;
    }

    // INDEX
    public function index()
    {
        $areas = Area::query()
        ->included()
        ->filter()
        ->get();
        return response()->json($areas);
    }

    // STORE
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
        ]);

        $area = $this->areaService->store($validated);
        return response()->json($area, 201);
    }

    // SHOW
    public function show($id)
    {
        $area = Area::findOrFail($id);

        return response()->json($area);
    }

    // UPDATE
    public function update(Request $request, Area $area)
    {
        //
    }

    // DESTROY
    public function destroy(Area $area)
    {
        //
    }
}

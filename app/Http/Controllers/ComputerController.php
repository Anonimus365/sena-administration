<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use App\Services\ComputerService;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    
    protected $computerService;

    public function __construct(ComputerService $computerService)
    {
        $this->computerService = $computerService;
    }

    public function index()
    {
        $computers = Computer::query()
        ->included()
        ->filter()
        ->get();

        return response()->json($computers);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'number' => 'required|integer',
            'brand' => 'required|string',
        ]);

        $computer = $this->computerService->store($validated);
        return response()->json($computer, 201);
    }

    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    public function update(Request $request, Computer $computer)
    {
        //
    }

    public function destroy(Computer $computer)
    {
        //
    }
}

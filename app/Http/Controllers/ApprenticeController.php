<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Services\ApprenticeService;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{

    protected $apprenticeService;

    public function __construct(ApprenticeService $apprenticeService)
    {
        $this->apprenticeService = $apprenticeService;
    }

    public function index()
    {
        $apprentices = Apprentice::query()
        ->included()
        ->filter()
        ->get();

        return response()->json($apprentices);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'cell_number' => 'required|string',
            'course_id' => 'required|string',
            'computer_id' => 'required|string',
        ]);

        $apprentice = $this->apprenticeService->store($validated);
        return response()->json($apprentice, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

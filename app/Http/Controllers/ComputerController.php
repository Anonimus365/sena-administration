<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return response()->json($computers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = Computer::create(
            $request->validate([
                'number',
                'brand'
            ])
        );
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $computer = Computer::findOrFail($id);
        return response()->json($computer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        //
    }
}

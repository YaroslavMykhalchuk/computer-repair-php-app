<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputerRepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computerService = TypeService::where('name', 'Ремонт комп\'ютерів')->with(['typeRepairs', 'brands'])->first();

        if (!$computerService) {
            return response()->json(['message' => 'Service type for computers not found'], 404);
        }

        return response()->json([
            'type_repairs' => $computerService->typeRepairs,
            'brands' => $computerService->brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

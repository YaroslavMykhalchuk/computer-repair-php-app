<?php

namespace App\Http\Controllers;

use App\Models\TypeService;

use Illuminate\Http\Request;

class PhoneRepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phoneService = TypeService::where('name', 'Ремонт телефонів')->with(['typeRepairs', 'brands'])->first();

        if (!$phoneService) {
            return response()->json(['message' => 'Service type for phones not found'], 404);
        }

        return response()->json([
            'type_repairs' => $phoneService->typeRepairs,
            'brands' => $phoneService->brands
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

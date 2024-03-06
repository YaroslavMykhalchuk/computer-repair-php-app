<?php

namespace App\Http\Controllers;

use App\Models\TypeService;

use Illuminate\Http\Request;

class LaptopRepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laptopService = TypeService::where('name', 'Ремонт ноутбуків')->with(['typeRepairs', 'brands'])->first();

        if (!$laptopService) {
            return response()->json(['message' => 'Service type for laptops not found'], 404);
        }

        return response()->json([
            'type_repairs' => $laptopService->typeRepairs,
            'brands' => $laptopService->brands
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

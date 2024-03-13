<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TypeService;


class ComputerRepairController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computerService = TypeService::where('name', 'Ремонт комп\'ютерів')
        ->with(['typeRepairs:id,name,type_service_id', 'brands:id,name'])
        ->first();

        if (!$computerService) {
            return response()->json(['message' => 'Service type for computers not found'], 404);
        }

        $typeRepairsTransformed = $computerService->typeRepairs->map(function ($typeRepair) {
            return [
                'id' => $typeRepair->id,
                'name' => $typeRepair->name
            ];
        });

        $brandsTransformed = $computerService->brands->map(function ($brand) {
            return [
                'id' => $brand->id,
                'name' => $brand->name
            ];
        });

        return response()->json([
            'type_repairs' => $typeRepairsTransformed,
            'brands' => $brandsTransformed
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

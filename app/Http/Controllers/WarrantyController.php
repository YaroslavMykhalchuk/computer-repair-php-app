<?php

namespace App\Http\Controllers;

use App\Models\TypeService;

use Illuminate\Http\Request;

class WarrantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeServices = TypeService::with(['typeRepairs' => function($query) {
            $query->with(['warranty']);
        }])->get();
    
        $result = $typeServices->map(function($typeService) {
            return [
                'id' => $typeService->id,
                'name' => $typeService->name,
                'type_repair' => $typeService->typeRepairs->map(function($typeRepair) {
                    if($typeRepair->warranty) {
                        $warranty = $typeRepair->warranty->first();
                    } else {
                        $warranty = null;
                    }
                    return [
                        'id' => $typeRepair->id,
                        'name' => $typeRepair->name,
                        'warranty_duration' => $warranty ? $warranty->duration : null
                    ];
                })
            ];
        });
    
        return response()->json([
            'type_service' => $result
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

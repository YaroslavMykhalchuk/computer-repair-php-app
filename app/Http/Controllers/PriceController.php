<?php

namespace App\Http\Controllers;

use App\Models\TypeService;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeServices = TypeService::with(['typeRepairs' => function($query) {
            $query->with(['price']);
        }])->get();

        $result = $typeServices->map(function($typeService) {
            return [
                'id' => $typeService->id,
                'name' => $typeService->name,
                'type_repair' => $typeService->typeRepairs->map(function($typeRepair) {
                    if ($typeRepair->prices) {
                        $price = $typeRepair->prices->first();
                    } else {
                        $price = null;
                    }
                    return [
                        'id' => $typeRepair->id,
                        'name' => $typeRepair->name,
                        'price' => $price ? $price->price : null
                    ];
                })
            ];
        });

        return response()->json([
            'type_service' => $result
        ]);
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

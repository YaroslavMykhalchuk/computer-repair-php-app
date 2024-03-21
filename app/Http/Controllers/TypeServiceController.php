<?php

namespace App\Http\Controllers;

use App\Models\TypeService;

use Illuminate\Http\Request;

class TypeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeServices = TypeService::select('id', 'name')->get();

        return response()->json($typeServices);
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
        $typeService = TypeService::with(['typeRepairs.prices', 'brands' => function ($query) {
            $query->select('brands.id', 'brands.name');
        }])->findOrFail($id);

        $response = [
            'type_repairs' => $typeService->typeRepairs->map(function ($typeRepair) {
                $prices = $typeRepair->prices->map(function($price) {
                    return $price->price;
                })->first();

                return [
                    'name' => $typeRepair->name,
                    'price' => $prices ?? null
                ];
            }),
            'brands' => $typeService->brands->map(function ($brand) {
                return [
                    'id' => $brand->id,
                    'name' => $brand->name
                ];
            }),
        ];

        return response()->json($response);
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

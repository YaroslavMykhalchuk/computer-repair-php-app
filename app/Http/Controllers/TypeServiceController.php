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
        $typeService = TypeService::with(['typeRepairs' => function ($query) {
            $query->select('id', 'name', 'type_service_id');
        }, 'brands' => function ($query) {
            $query->select('brands.id', 'brands.name');
        }])->findOrFail($id, ['id', 'name']);
    
        $response = $typeService->toArray();
        $response['type_repairs'] = collect($response['type_repairs'])->map(function ($typeRepair) {
            return [
                'id' => $typeRepair['id'],
                'name' => $typeRepair['name'],
            ];
        });
    
        $response['brands'] = collect($response['brands'])->map(function ($brand) {
            return [
                'id' => $brand['id'],
                'name' => $brand['name'],
            ];
        });
    
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

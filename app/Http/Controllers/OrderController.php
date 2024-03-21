<?php

namespace App\Http\Controllers;

use App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'email' => 'required|email',
            'type_service_id' => 'required|integer|exists:type_services,id',
            'type_repair_id' => 'required|integer|exists:type_repairs,id',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
        
        $statusInProcessId = 1;
        
        $order = Order::create([
            'email' => $validatedData['email'],
            'type_service_id' => $validatedData['type_service_id'],
            'type_repair_id' => $validatedData['type_repair_id'],
            'status_id' => $statusInProcessId,
            'description' => $validatedData['description'],
            'start_date' => now(),
            'price' => $validatedData['price'],
        ]);
        
        return response()->json(['message' => 'Order created successfully'], 201);
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

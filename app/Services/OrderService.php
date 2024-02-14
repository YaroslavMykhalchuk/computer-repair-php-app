<?php

namespace App\Services;
use App\Models\Order;

class OrderService
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getOrderById($id)
    {
        return Order::find($id);
    }

    public function createOrder(array $data)
    {
        return Order::create($data);
    }

    public function updateOrder(Order $order, array $data)
    {
        return $order->update($data);
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();
    }
}
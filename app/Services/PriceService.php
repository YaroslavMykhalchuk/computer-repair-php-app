<?php

namespace App\Services;
use App\Models\Price;

class PriceService
{
    public function getPriceById($id)
    {
        return Price::find($id);
    }

    public function createPrice(array $data)
    {
        return Price::create($data);
    }

    public function updatePrice(Price $price, array $data)
    {
        $price->update($data);
        return $price;
    }

    public function deletePrice(Price $price)
    {
        $price->delete();
    }
}
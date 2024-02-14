<?php

namespace App\Services;
use App\Models\Brand;

class BrandService
{
    public function getBrands()
    {
        return Brand::all();
    }

    public function getBrandById($id)
    {
        return Brand::find($id);
    }

    public function createBrand(array $data)
    {
        return Brand::create($data);
    }

    public function updateBrand(Brand $brand, array $data)
    {
        $brand->update($data);
        return $brand;
    }

    public function deleteBrand(Brand $brand)
    {
        $brand->delete();
    }
}
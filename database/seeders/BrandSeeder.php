<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::truncate();

        $brands = [
            ['name' => 'Apple', 'image_url' => null],
            ['name' => 'Samsung', 'image_url' => null],
            ['name' => 'Xiaomi', 'image_url' => null],
            ['name' => 'Huawei', 'image_url' => null],
            ['name' => 'Asus', 'image_url' => null],
            ['name' => 'Lenovo', 'image_url' => null],
            ['name' => 'Dell', 'image_url' => null],
            ['name' => 'HP', 'image_url' => null],
            ['name' => 'Acer', 'image_url' => null],
            ['name' => 'MSI', 'image_url' => null],
            ['name' => 'LG', 'image_url' => null],
            ['name' => 'Sony', 'image_url' => null],
            ['name' => 'Nokia', 'image_url' => null],
            ['name' => 'BlackBerry', 'image_url' => null],
            ['name' => 'HTC', 'image_url' => null],
            ['name' => 'Google', 'image_url' => null],
            ['name' => 'Gigabyte', 'image_url' => null],
        ];

        Brand::insert($brands);
    }
}

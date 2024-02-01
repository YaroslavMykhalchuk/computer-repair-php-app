<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BrandModel;

class BrandModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandModels = [
            [
                'name' => 'Vivobook 15',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'TUF Gaming F15',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'ROG Strix G17',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'VivoBook 17X',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'TUF Gaming A15',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'ROG Zephyrus G16',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'Laptop M515DA',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'Zenbook 14',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'ExpertBook B9',
                'brand_id' => 5,
                'type_service_id' => 1
            ],
            [
                'name' => 'ROG Flow X16',
                'brand_id' => 5,
                'type_service_id' => 1
            ]
        ];

        foreach ($brandModels as $brandModel) {
            BrandModel::firstOrCreate(
                [
                    'name' => $brandModel['name'],
                    'brand_id' => $brandModel['brand_id'],
                ], 
                $brandModel
            );
        }
    }
}

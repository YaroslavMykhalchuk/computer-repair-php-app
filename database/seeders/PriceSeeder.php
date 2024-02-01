<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prices = [
            [
                'price' => 100,
                'type_repair_id' => 1
            ],
            [
                'price' => 200,
                'type_repair_id' => 2
            ],
            [
                'price' => 300,
                'type_repair_id' => 3
            ],
            [
                'price' => 400,
                'type_repair_id' => 4
            ],
            [
                'price' => 500,
                'type_repair_id' => 5
            ],
            [
                'price' => 600,
                'type_repair_id' => 6
            ],
            [
                'price' => 700,
                'type_repair_id' => 7
            ]
        ];

        foreach ($prices as $price) {
            Price::firstOrCreate(['type_repair_id' => $price['type_repair_id']], $price);
        }
    }
}

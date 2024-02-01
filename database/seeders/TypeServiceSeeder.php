<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeService;

class TypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeServices = [
            [
                'name' => 'Ремонт ноутбуків',
                'description' => 'Опис послуги з ремонту ноутбуків'
            ],
            [
                'name' => 'Ремонт телефонів',
                'description' => 'Опис послуги з ремонту телефонів'
            ],
            [
                'name' => 'Ремонт комп\'ютерів',
                'description' => 'Опис послуги з ремонту комп\'ютерів'
            ]

        ];

        foreach ($typeServices as $typeService) {
            TypeService::firstOrCreate(['name' => $typeService['name']], $typeService);
        }
    }
}

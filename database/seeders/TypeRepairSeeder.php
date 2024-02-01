<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeRepairs = [
            [
                'name' => 'Комплексна діагностика',
                'type_service_id' => 1,
                'price_id' => 1
            ],
            [
                'name' => 'Ремонт або заміна клавіатури',
                'type_service_id' => 1,
                'price_id' => 2
            ],
            [
                'name' => 'Заміна роз’ємів(USB, живлення та ін.)',
                'type_service_id' => 1,
                'price_id' => 3
            ],
            [
                'name' => 'Заміна корпусу та його частин',
                'type_service_id' => 1,
                'price_id' => 4
            ],
            [
                'name' => 'Ремонт материнських плат, заміна мостів та інших мікросхем',
                'type_service_id' => 1,
                'price_id' => 5
            ],
            [
                'name' => 'Заміна комплектуючих (процесорів, HDD, оптичних приводів, пам’яті та ін.)',
                'type_service_id' => 1,
                'price_id' => 6
            ],
            [
                'name' => 'Заміна акумуляторів та блоків живлення',
                'type_service_id' => 1,
                'price_id' => 7
            ]        
        ];

        foreach ($typeRepairs as $typeRepair) {
            TypeRepair::firstOrCreate(
                [
                    'name' => $typeRepair['name'], 
                    'type_service_id' => $typeRepair['type_service_id']
                ], 
                $typeRepair
            );
        }
    }
}

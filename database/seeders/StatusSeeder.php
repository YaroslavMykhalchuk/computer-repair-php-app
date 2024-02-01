<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'В обробці'],
            ['name' => 'В процесі'],
            ['name' => 'Виконано']
        ];

        foreach ($statuses as $status) {
            Status::firstOrCreate(['name' => $status['name']], $status);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoresSeeder extends Seeder
{
    public function run(): void
    {
        Store::factory()->create([
            'name' => 'ah'
        ]);

        Store::factory()->create([
            'name' => 'jumbo'
        ]);
    }
}

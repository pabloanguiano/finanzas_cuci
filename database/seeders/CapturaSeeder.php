<?php

namespace Database\Seeders;

use App\Models\Captura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Captura::factory()->count(50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Trabajo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrabajosSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trabajo::factory()->count(20)->create();
    }
}

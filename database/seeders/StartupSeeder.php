<?php

namespace Database\Seeders;

use App\Models\Startup;
use Illuminate\Database\Seeder;

class StartupSeeder extends Seeder
{
    public function run()
    {
        Startup::factory()->count(20)->create();
    }
} 
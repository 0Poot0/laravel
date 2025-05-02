<?php

namespace Database\Seeders;

use App\Models\Investor;
use Illuminate\Database\Seeder;

class InvestorSeeder extends Seeder
{
    public function run()
    {
        Investor::factory()->count(4)->create();
    }
} 
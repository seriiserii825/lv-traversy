<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory()->count(10)->create();
    }
}

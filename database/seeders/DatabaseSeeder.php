<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Serii',
            'email' => 'seriiburduja@gmail.com',
            'password' => Hash::make('serii1981'),
        ]);
        User::factory()->create([
            'name' => 'Nixon',
            'email' => 'nixon@gmail.com',
            'password' => Hash::make('nixon1983'),
        ]);
        $this->call([
            JobListingsSeeder::class,
        ]);
    }
}

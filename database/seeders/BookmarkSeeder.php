<?php

namespace Database\Seeders;

use App\Models\JobListing;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookmarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serii = User::where('email', 'seriiburduja@gmail.com')->firstOrFail();
        $job_ids = JobListing::pluck('id')->toArray();
        $random_job_ids = array_rand($job_ids, 3);

        foreach ($random_job_ids as $job_id) {
            $serii->bookmarkedJobs()->attach($job_id);
        }

    }
}

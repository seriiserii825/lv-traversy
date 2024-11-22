<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Software Engineer',
                'description' => 'Develops software solutions by studying information needs, conferring with users, and studying systems flow, data usage, and work processes.',
            ],
            [
                'title' => 'Data Scientist',
                'description' => 'Data scientists are big data wranglers, gathering and analyzing large sets of structured and unstructured data.',
            ],
            [
                'title' => 'Product Manager',
                'description' => 'Product managers are responsible for guiding the success of a product and leading the cross-functional team that is responsible for improving it.',
            ],
            [
                'title' => 'DevOps Engineer',
                'description' => 'DevOps engineers work with developers and the IT staff to oversee the code releases.',
            ],
            [
                'title' => 'Network Engineer',
                'description' => 'Network engineers are responsible for building and maintaining the day-to-day operation of computer networks that companies and organizations rely on.',
            ],
        ];
        DB::table('job_listings')->insert($jobs);
    }
}

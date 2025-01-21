<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    public static function getAll(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'description' => 'We are looking for a software engineer to join our team.',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'
            ],
            [
                'id' => 2,
                'title' => 'Product Manager',
                'description' => 'We are looking for a product manager to join our team.',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'
            ],
            [
                'id' => 3,
                'title' => 'Data Scientist',
                'description' => 'We are looking for a data scientist to join our team.',
                'created_at' => '2021-01-01 00:00:00',
                'updated_at' => '2021-01-01 00:00:00'
            ]
        ];
    }
}

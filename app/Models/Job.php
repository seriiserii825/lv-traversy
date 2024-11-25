<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = [
        'title',
        'description',
        'salary',
        'tags',
        'job_type',
        'remote',
        'requirements',
        'benefits',
        'address',
        'city',
        'state',
        'zipcode',
        'contract_email',
        'contract_phone',
        'company_name',
        'company_description',
        'company_logo',
        'company_website'
    ];
}

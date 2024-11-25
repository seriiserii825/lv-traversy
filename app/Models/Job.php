<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    protected $table = 'job_listings';
    protected $fillable = [
        'user_id',
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

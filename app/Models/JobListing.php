<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
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
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo',
        'company_website'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        'remote' => 'boolean',
    ];

    public function bookmarkedByUsers(){
        return $this->belongsToMany(User::class, 'job_user_bookmarks', 'job_id', 'user_id')->withTimestamps();
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'user_id' => $this->user_id,
            'salary' => $this->salary,
            'tags' => $this->tags,
            'job_type' => $this->job_type,
            'remote' => $this->remote,
            'requirements' => $this->requirements,
            'benefits' => $this->benefits,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'zipcode' => $this->zipcode,
            'contact_email' => $this->contact_email,
            'contact_phone' => $this->contact_phone,
            'company_name' => $this->company_name,
            'company_description' => $this->company_description,
            'company_logo' => $this->company_logo,
            'company_website' => $this->company_website,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

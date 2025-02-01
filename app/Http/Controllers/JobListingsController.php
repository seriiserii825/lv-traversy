<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = JobListing::orderBy('updated_at', 'desc')->get();
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'salary' => 'integer|required',
            'tags' => 'string|nullable',
            'job_type' => 'string|nullable',
            'remote' => 'boolean|required',
            'requirements' => 'string|nullable',
            'benefits' => 'string|nullable',
            'address' => 'string|nullable',
            'city' => 'string|required',
            'state' => 'string|required',
            'zipcode' => 'string|nullable',
            'contact_email' => 'email|required',
            'contact_phone' => 'string|nullable',
            'company_name' => 'string|required',
            'company_description' => 'string|nullable',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_website' => 'string|url|nullable'
        ]);
        $validated['user_id'] = 1;

        if ($request->hasFile('company_logo')) {
            $validated['company_logo'] = $request->file('company_logo')->store('logos', 'public');
        }

        JobListing::create($validated);

        return redirect()->route('jobs.index')->with('success', 'Job Listing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JobListing $job)
    {
        $job_type = $job->job_type;
        return view('jobs.show', compact('job', 'job_type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'description' => 'string|required',
            'salary' => 'integer|required',
            'tags' => 'string|nullable',
            'job_type' => 'string|nullable',
            'remote' => 'boolean|required',
            'requirements' => 'string|nullable',
            'benefits' => 'string|nullable',
            'address' => 'string|nullable',
            'city' => 'string|required',
            'state' => 'string|required',
            'zipcode' => 'string|nullable',
            'contact_email' => 'email|required',
            'contact_phone' => 'string|nullable',
            'company_name' => 'string|required',
            'company_description' => 'string|nullable',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'company_website' => 'string|url|nullable'
        ]);

        $job = JobListing::find($id);

        if ($request->hasFile('company_logo')) {
            Storage::delete('public/logos/' . basename($job->company_logo));
            $path = $request->file('company_logo')->store('logos', 'public');
            $validated['company_logo'] = $path;
        }
        $job->update($validated);
        return redirect()->route('jobs.index')->with('success', 'Job Listing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

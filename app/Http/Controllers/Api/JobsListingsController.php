<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\StoreRequest;
use App\Http\Requests\Job\UpdateRequest;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class JobsListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();

        return JobResource::collection($jobs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $user = User::first();
        $result = $request->validated();
        $result['user_id'] = $user->id;
        if ($request->hasFile('company_logo')) {
            $result['company_logo'] = $request->file('company_logo')->store('logos', 'public');
        }
        $job = Job::create($result);
        return new JobResource($job);
    }

    public function update(StoreRequest $request, $id)
    {
        $job = Job::findOrFail($id);
        $result = $request->validated();
        // if ($request->hasFile('company_logo')) {
        //     Storage::disk('public')->delete($request->company_logo);
        //     $result['company_logo'] = $request->file('company_logo')->store('logos', 'public');
        // }
        $job->update($result);
        return new JobResource($job);
    }

    public function create()
    {
        $job_types = JOB::getJobTypes();

        return response()->json([
            'job_types' => $job_types
        ]);
    }

    public function edit($id)
    {
        $job_types = JOB::getJobTypes();
        $job = Job::findOrFail($id);

        return response()->json([
            'job_types' => $job_types,
            'job' => new JobResource($job)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::findOrFail($id);

        return new JobResource($job);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

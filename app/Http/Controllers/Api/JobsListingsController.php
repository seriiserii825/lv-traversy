<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Job\StoreRequest;
use App\Http\Resources\JobResource;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;

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
        try {
            $job = Job::create($result);
            return new JobResource($job);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Error creating job listing',
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function create()
    {
        $job_types = JOB::getJobTypes();

        return response()->json([
            'job_types' => $job_types
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

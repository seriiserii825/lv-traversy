<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantController extends Controller
{
    public function store(Request $request, JobListing $job)
    {
        $existing_applicant = Applicant::where('job_id', $job->id)->where('user_id', Auth::id())->first();

        if ($existing_applicant) {
            return redirect()->back()->with('error', 'You have already applied for this job');
        }

        $validated_data = $request->validate([
            'full_name' => 'required|string',
            'contact_phone' => 'nullable|string',
            'contact_email' => 'required|email',
            'message' => 'nullable|string',
            'location' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf',
        ]);
        $resume_path = $request->file('resume')->store('resumes', 'public');
        if ($request->hasFile('resume')) {
            $validated_data['resume_path'] = $resume_path;
        }
        $validated_data['job_id'] = $job->id;
        $validated_data['user_id'] = Auth::id();
        Applicant::create($validated_data);

        return redirect()->route('jobs.index')->with('success', 'Application submitted successfully');
    }
    public function destroy(Applicant $applicant)
    {
        // dd($applicant);
        $applicant->delete();
        return redirect()->route('dashboard')->with('success', "Applicant $applicant->full_name deleted successfully");
    }
}

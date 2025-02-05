<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_bookmarks = $user->bookmarkedJobs()->orderBy('job_user_bookmarks.created_at', 'desc')->paginate(9);
        return view('bookmarks.index', compact('user_bookmarks'))->with('success', 'Bookmarks retrieved successfully');
    }
    public function store(JobListing $job)
    {
        $user = Auth::user();
        if ($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return redirect()->back()->with('error', 'Job already bookmarked');
        } else {
            $user->bookmarkedJobs()->attach($job->id);
            return redirect()->route('bookmarks')->with('success', 'Job bookmarked successfully');
        }
    }
    public function destroy(JobListing $job)
    {
        $user = Auth::user();
        if (!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return redirect()->back()->with('error', 'Job is not bookmarked');
        }

        $user->bookmarkedJobs()->detach($job->id);
        return redirect()->route('bookmarks')->with('success', 'Job unbookmarked successfully');
    }
}

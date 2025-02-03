<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $jobs = JobListing::where('user_id', $user->id)->get();
        return view('dashboard.index', compact('jobs', 'user'));
    }
}

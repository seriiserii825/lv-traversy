<?php

namespace App\Http\Controllers;

use App\Models\JobListing;

class HomeController extends Controller
{
    public function index()
    {
        $jobs = JobListing::limit(6)->orderBy('created_at', 'desc')->get();

        return view('pages.index', compact('jobs'));
    }
}

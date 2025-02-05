<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user_bookmarks = $user->bookmarkedJobs;
        return view('bookmarks.index', compact('user_bookmarks'))->with('success', 'Bookmarks retrieved successfully');
    }
}

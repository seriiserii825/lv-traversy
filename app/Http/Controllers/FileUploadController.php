<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(Request $request)
    {
        return view('file.upload');
    }
}

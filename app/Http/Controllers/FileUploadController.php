<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('file.upload', compact('files'));
    }
    public function store(Request $request)
    {
        // $file = Storage::disk('local')->put('/', $request->file('file'));
        // $file = $request->file('file')->store('/', 'local');
        $file_path = $request->file('file')->store('/', 'public');
        $file = new File();
        $file->file_path = $file_path;
        $file->save();
        return redirect()->route('file.upload');
    }
}

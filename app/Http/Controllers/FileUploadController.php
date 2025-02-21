<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FacadesFile;

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
        $file_path = $request->file('file')->store('/', 'dir_public');
        $file = new File();
        $file->file_path = '/uploads/' . $file_path;
        $file->save();
        return redirect()->route('file.upload');
    }

    public function destroy($id)
    {
        $file = File::findOrFail($id);
        $file_path = public_path($file->file_path);
        if (FacadesFile::exists($file_path)) {
            FacadesFile::delete($file_path);
        }
        $file->delete();
        return redirect()->route('file.upload');
    }
}

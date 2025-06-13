<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class PdfControllerController extends Controller
{
    public function preview()
    {
        return view('pdf.template'); // just shows styled HTML
    }


    public function generate()
    {
        $html = view('pdf.template')->render();
        $tempHtmlPath = storage_path('app/temp.html');
        $outputPdfPath = storage_path('app/output.pdf');
        $scriptPath = base_path('generate-pdf.js'); // ← THIS is the fix

        File::put($tempHtmlPath, $html);

        $command = "node \"$scriptPath\" \"$tempHtmlPath\" \"$outputPdfPath\" 2>&1"; // ← full path and capture stderr
        exec($command, $output, $returnVar);

        if ($returnVar !== 0) {
            return response("PDF generation failed (code $returnVar): " . implode("\n", $output), 500);
        }

        if (!file_exists($outputPdfPath)) {
            return response("PDF file not found", 404);
        }

        return response()->file($outputPdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename=\"preview.pdf\"',
        ]);
    }
}

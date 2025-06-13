<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;

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

        \File::put($tempHtmlPath, $html);

        $command = "node generate-pdf.js \"$tempHtmlPath\" \"$outputPdfPath\"";
        exec($command, $output, $returnVar);

        if ($returnVar !== 0 || !file_exists($outputPdfPath)) {
            return response("PDF generation failed", 500);
        }

        return response()->file($outputPdfPath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="preview.pdf"',
        ]);
    }
}

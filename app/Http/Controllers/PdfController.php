<?php

namespace App\Http\Controllers;

class PdfController extends Controller
{
    public function view()
    {
        $appname = config('app.name');

        $file = "cv@{$appname}.pdf";

        $path = public_path("assets/pdf/{$file}");

        if (!file_exists($path)) {
            abort(404, 'File not found.');
        }

        return view('pages.cv-viewer', [
            'file' => $file
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function __invoke($file)
    {
        $file_path = public_path('storage\files\\'.$file);
        return response()->download($file_path);
    }
}

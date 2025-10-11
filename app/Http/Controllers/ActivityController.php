<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    public function index()
    {
        return view('front.activities.index');
    }

    public function uoz()
    {
        $path = public_path('main/assets/img/activities/uoz');
        $files = File::files($path);

        $images = [];
        foreach ($files as $file) {
            $images[] = asset('main/assets/img/activities/uoz/' . $file->getFilename());
        }
        return view('front.activities.uoz', compact('images'));
    }

    public function umu()
    {
        $path = public_path('main/assets/img/activities/umu');
        $files = File::files($path);

        $images = [];
        foreach ($files as $file) {
            $images[] = asset('main/assets/img/activities/umu/' . $file->getFilename());
        }
        return view('front.activities.umu', compact('images'));
    }
}

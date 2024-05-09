<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function activities()
    {
        return view('front.projects.activities');
    }

    public function achievements()
    {
        return view('front.projects.achievements');
    }

    public function impacts()
    {
        return view('front.projects.impacts');
    }

    public function workshops_training()
    {
        return view('front.projects.workshops_training');
    }
}

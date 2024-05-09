<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about.about');
    }

    public function outcomes()
    {
        return view('front.about.outcomes');
    }

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
}

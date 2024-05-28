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

    public function c_development()
    {
        return view('front.about.capacity_development');
    }

    public function partnership()
    {
        return view('front.about.partnership');
    }

    public function news()
    {
        return view('front.news.news');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function dasboard()
    {
        return view('admin.dashboard');
    }
}

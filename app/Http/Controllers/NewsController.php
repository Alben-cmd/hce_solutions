<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('front.news.news');
    }

    public function scholarshipAwardees()
    {
        return view('front.news.scholarship_awardees');
    }
}

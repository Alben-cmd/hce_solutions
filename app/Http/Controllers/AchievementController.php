<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        return view('front.projects.achievements');
    }

    public function brussels()
    {
        return view('front.projects.image_folder.brussels');
    }

    public function futminna()
    {
        return view('front.projects.image_folder.futminna');
    }

    public function abomey_calavi()
    {
        return view('front.projects.image_folder.abomey_calavi');
    }

    public function mat_water()
    {
        return view('front.projects.image_folder.mat_water');
    }

    public function valec_nig()
    {
        return view('front.projects.image_folder.valec_nig');
    }

    public function EcoDry()
    {
        return view('front.projects.image_folder.EcoDry');
    }
}

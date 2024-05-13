<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function career(){

        return view('front.opportunities.career ');
    }

    public function scholarship(){

        return view('front.opportunities.scholarship ');
    }
}

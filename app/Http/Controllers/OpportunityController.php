<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function opportunities(){

        return view('front.opportunities.opportunities ');
    }

    public function scholarship(){

        return view('front.opportunities.scholarship ');
    }
}

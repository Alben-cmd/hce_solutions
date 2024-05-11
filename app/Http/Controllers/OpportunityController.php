<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function carer(){

        return view('front.opportunities.carer ');
    }

    public function scholarship(){

        return view('front.opportunities.scholarship ');
    }
}

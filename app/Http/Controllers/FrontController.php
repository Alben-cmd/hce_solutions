<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contactus;

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

    public function faq()
    {
        return view('front.faq');
    }

    public function dasboard()
    {
        return view('admin.dashboard');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function contactmail(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

        $admin_mail = 'alenoghenaben@gmail.com';
        Mail::to($admin_mail)->send(new contactus($data));
        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us. We will get back to you shortly.']);
    }

}

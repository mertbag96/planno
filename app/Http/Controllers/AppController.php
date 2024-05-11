<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AppController extends Controller
{

    public function index(Request $request) : View
    {
        return view('pages.index', $request);
    }

    public function login() : View
    {
        return view('pages.auth.login');
    }

    public function signup() : View
    {
        return view('pages.auth.signup');
    }

    public function forgetPassword() : View
    {
        return view('pages.auth.forget-password');
    }

    public function features() : View
    {
        return view('pages.features');
    }

    public function howItWorks() : View
    {
        return view('pages.how-it-works');
    }

    public function forTeams() : View
    {
        return view('pages.for-teams');
    }

    public function integrations() : View
    {
        return view('pages.resources.integrations');
    }

    public function templates() : View
    {
        return view('pages.resources.templates');
    }

    public function gettingStarted() : View
    {
        return view('pages.resources.getting-started');
    }

    public function helpCenter() : View
    {
        return view('pages.resources.help-center');
    }

    public function pricing() : View
    {
        return view('pages.pricing');
    }

    public function about() : View
    {
        return view('pages.company.about-us');
    }

    public function career() : View
    {
        return view('pages.company.career');
    }

    public function contact() : View
    {
        return view('pages.company.contact-us');
    }

    public function security() : View
    {
        return view('pages.other.security');
    }

    public function privacy() : View
    {
        return view('pages.other.privacy');
    }

    public function terms() : View
    {
        return view('pages.other.terms');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }
    public function about()
    {
        return view('homepage.about');
    }
    public function features()
    {
        return view('homepage.features');
    }
    public function contact()
    {
        return view('homepage.contact');
    }
    public function gallery()
    {
        return view('homepage.gallery');
    }
    public function terms()
    {
        return view('homepage.terms');
    }
    public function privacy()
    {
        return view('homepage.privacy');
    }
}

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
    public function services()
    {
        return view('homepage.services');
    }
    public function contact()
    {
        return view('homepage.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function news()
    {
        return view('news');
    }
    public function news_detail()
    {
        return view('news_detail');
    }
    public function about_us()
    {
        return view('about_us');
    }
}

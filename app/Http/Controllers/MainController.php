<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        // Return the "Home" view
        return view('main/home');
    }

    public function codequest()
    {
        // Return the "Home" view
        return view('main/codequest/mpcq');
    }

    public function news()
    {
        // Return the "Home" view
        return view('main/news');
    }

    public function about()
    {
        // Return the "Home" view
        return view('main/about');
    }
}

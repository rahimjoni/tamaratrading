<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('welcome');
    }

    public function contactUs()
    {
        return view('layouts.frontend.contact');
    }

    public function aboutUs()
    {
        return view('layouts.frontend.about');
    }
}

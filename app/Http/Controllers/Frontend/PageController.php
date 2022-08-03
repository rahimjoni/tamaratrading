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

    public function services()
    {
        return view('layouts.frontend.services');
    }

    public function project()
    {
        return view('layouts.frontend.project');
    }

    public function piping()
    {
        return view('layouts.frontend.piping');
    }

    public function mro()
    {
        return view('layouts.frontend.mro');
    }

    public function strategicPartnership()
    {
        return view('layouts.frontend.strategic-partnership');
    }
}

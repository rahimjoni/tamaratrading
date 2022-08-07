<?php

namespace App\Http\Controllers\Frontend;

use App\ContactMessages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

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
    public function contactMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactMessages::create($request->all());

        return redirect()->back()
            ->with(['success' => 'Thank you for contact us. We will contact you shortly.']);
    }
}

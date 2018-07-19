<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('title')); // two ways to do the same thing
        return view('pages.index')->with('title', $title); // this way is better for arrays
    }

    public function about() {
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $title = 'Our Services';
        return view('pages.services')->with('title', $title);
    }
    
}

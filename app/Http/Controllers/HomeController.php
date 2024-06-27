<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('page.home');
    }
    public function homeen()
    {
        return view('page.home-en');
    }
    public function gallery()
    {
        return view('page.gallery');
    }
    public function galleryen()
    {
        return view('page.gallery-en');
    }
    public function about()
    {
        return view('page.about');
    }
    public function abouten()
    {
        return view('page.about-en');
    }
    public function faq()
    {
        return view('page.faq');
    }
    public function faqen()
    {
        return view('page.faq-en');
    }
}

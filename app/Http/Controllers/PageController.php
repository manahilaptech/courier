<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home() { return view('home'); }
    public function about() { return view('about'); }
    public function contact() { return view('contact'); }
    public function booking() { return view('booking'); }
    public function track() { return view('track'); }
    public function admin() { return view('admin'); }
    public function login() { return view('login'); }
}
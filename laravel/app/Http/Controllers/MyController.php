<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home(){

        return view('pages.home-blade');
    }

    public function blog(){

        return view('pages.blog-blade');
    }

    public function about(){

        return view('pages.about-blade');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index() {


        return view('home/index');
    }


    public function gallery() {


        return view('home/gallery');
    }

    public function fullscreen_gallery() {
        return view('home/fullscreen-gallery');
    }


    public function bloglist() {
        return view('home/bloglist');
    }

    public function paralax() {
        return view('home/paralax');
    }

    public function about_us() {
        return view('home/about_us');
    }

    public function contact_us() {

    }


}

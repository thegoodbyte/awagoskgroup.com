<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //

    public function index() {

        return view('home/index');
    }

    public function remodeling_renovations() {
        return view('services/remodeling_renovations');

    }

    public function custom_kithens() {

    }

    public function custom_bathrooms() {

    }

    public function custom_living_spaces() {

    }



}

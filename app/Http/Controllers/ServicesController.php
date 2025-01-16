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
        return view('services/custom_kitchens');
    }

    public function custom_bathrooms() {
        return view('services/custom_bathrooms');
    }

    public function custom_living_spaces() {
        return view('services/custom_living_spaces');
    }

    public function smart_home_integration() {
        return view('services/smart_home_integration');
    }

    public function stairways() {
        return view('services/stairways');
    }



}

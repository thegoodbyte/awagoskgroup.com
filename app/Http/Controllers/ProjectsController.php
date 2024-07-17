<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    //

    public function index() {

        return view('projects/index');
    }


    public function manhattan_west_64th() {
        return view('projects/manhattan_west_64th');
    }

    public function brooklyn_warren_str() {
        return view('projects/brooklyn_warren_st');
    }

    public function manhattan_park_ave() {
        return view('projects/manhattan_park_ave');
    }

    public function manhattan_riverside_blvd() {
        return view('projects/manhattan_riverside_blvd');
    }
    public function manhattan_wooster_st() {
        return view('projects/manhattan_wooster_st');
    }




}

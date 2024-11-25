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
        $images['image_path'] = '/img/projects_gallery/01_17W64TH_LOWRES/';
        $images['images'] = [
            '17W64TH_LOWRES_01-1600w.jpg',
            '17W64TH_LOWRES_02-1600w.jpg',
            '17W64TH_LOWRES_03-1600w.jpg',
            '17W64TH_LOWRES_04-1600w.jpg',

            '17W64TH_LOWRES_05-1600w.jpg',
            '17W64TH_LOWRES_06-1600w.jpg',
            '17W64TH_LOWRES_07-1600w.jpg',
            '17W64TH_LOWRES_08-1600w.jpg',

            '17W64TH_LOWRES_09-1600w.jpg'
        ];
        $images['thumbs_dir'] = 'thumbs/';
        $images['thumbs'] = [
            '17W64TH_LOWRES_01-250w.jpg',
            '17W64TH_LOWRES_02-250w.jpg',
            '17W64TH_LOWRES_03-250w.jpg',
            '17W64TH_LOWRES_04-250w.jpg',

            '17W64TH_LOWRES_05-250w.jpg',
            '17W64TH_LOWRES_06-250w.jpg',
            '17W64TH_LOWRES_07-250w.jpg',
            '17W64TH_LOWRES_08-250w.jpg',

            '17W64TH_LOWRES_09-250w.jpg'
        ];

        return view('projects/manhattan/west-64th', ['images' => $images]);
    }

    public function brooklyn_warren_str() {
        $images['image_path'] = '/img/projects_gallery/01_17W64TH_LOWRES/';
        $images['images'] = [
            '17W64TH_LOWRES_01-1600w.jpg',
            '17W64TH_LOWRES_02-1600w.jpg',
            '17W64TH_LOWRES_03-1600w.jpg',
            '17W64TH_LOWRES_04-1600w.jpg',

            '17W64TH_LOWRES_05-1600w.jpg',
            '17W64TH_LOWRES_06-1600w.jpg',
            '17W64TH_LOWRES_07-1600w.jpg',
            '17W64TH_LOWRES_08-1600w.jpg',

            '17W64TH_LOWRES_09-1600w.jpg'
        ];
        $images['thumbs_dir'] = 'thumbs/';
        $images['thumbs'] = [
            '17W64TH_LOWRES_01-250w.jpg',
            '17W64TH_LOWRES_02-250w.jpg',
            '17W64TH_LOWRES_03-250w.jpg',
            '17W64TH_LOWRES_04-250w.jpg',

            '17W64TH_LOWRES_05-250w.jpg',
            '17W64TH_LOWRES_06-250w.jpg',
            '17W64TH_LOWRES_07-250w.jpg',
            '17W64TH_LOWRES_08-250w.jpg',

            '17W64TH_LOWRES_09-250w.jpg'
        ];

        return view('projects/brooklyn/warren_st', ['images' => $images]);
    }

    public function manhattan_park_ave() {
        $images['image_path'] = '/img/projects_gallery/01_17W64TH_LOWRES/';
        $images['images'] = [
            '17W64TH_LOWRES_01-1600w.jpg',
            '17W64TH_LOWRES_02-1600w.jpg',
            '17W64TH_LOWRES_03-1600w.jpg',
            '17W64TH_LOWRES_04-1600w.jpg',

            '17W64TH_LOWRES_05-1600w.jpg',
            '17W64TH_LOWRES_06-1600w.jpg',
            '17W64TH_LOWRES_07-1600w.jpg',
            '17W64TH_LOWRES_08-1600w.jpg',

            '17W64TH_LOWRES_09-1600w.jpg'
        ];
        $images['thumbs_dir'] = 'thumbs/';
        $images['thumbs'] = [
            '17W64TH_LOWRES_01-250w.jpg',
            '17W64TH_LOWRES_02-250w.jpg',
            '17W64TH_LOWRES_03-250w.jpg',
            '17W64TH_LOWRES_04-250w.jpg',

            '17W64TH_LOWRES_05-250w.jpg',
            '17W64TH_LOWRES_06-250w.jpg',
            '17W64TH_LOWRES_07-250w.jpg',
            '17W64TH_LOWRES_08-250w.jpg',

            '17W64TH_LOWRES_09-250w.jpg'
        ];

        return view('projects/manhattan/park-ave', ['images' => $images]);
    }

    public function manhattan_riverside_blvd() {
        $images['image_path'] = '/img/projects_gallery/01_17W64TH_LOWRES/';
        $images['images'] = [
            '17W64TH_LOWRES_01-1600w.jpg',
            '17W64TH_LOWRES_02-1600w.jpg',
            '17W64TH_LOWRES_03-1600w.jpg',
            '17W64TH_LOWRES_04-1600w.jpg',

            '17W64TH_LOWRES_05-1600w.jpg',
            '17W64TH_LOWRES_06-1600w.jpg',
            '17W64TH_LOWRES_07-1600w.jpg',
            '17W64TH_LOWRES_08-1600w.jpg',

            '17W64TH_LOWRES_09-1600w.jpg'
        ];
        $images['thumbs_dir'] = 'thumbs/';
        $images['thumbs'] = [
            '17W64TH_LOWRES_01-250w.jpg',
            '17W64TH_LOWRES_02-250w.jpg',
            '17W64TH_LOWRES_03-250w.jpg',
            '17W64TH_LOWRES_04-250w.jpg',

            '17W64TH_LOWRES_05-250w.jpg',
            '17W64TH_LOWRES_06-250w.jpg',
            '17W64TH_LOWRES_07-250w.jpg',
            '17W64TH_LOWRES_08-250w.jpg',

            '17W64TH_LOWRES_09-250w.jpg'
        ];
        return view('projects/manhattan/riverside-blvd', ['images' => $images] );
    }
    public function manhattan_wooster_st() {
        $images['image_path'] = '/img/projects_gallery/01_17W64TH_LOWRES/';
        $images['images'] = [
            '17W64TH_LOWRES_01-1600w.jpg',
            '17W64TH_LOWRES_02-1600w.jpg',
            '17W64TH_LOWRES_03-1600w.jpg',
            '17W64TH_LOWRES_04-1600w.jpg',

            '17W64TH_LOWRES_05-1600w.jpg',
            '17W64TH_LOWRES_06-1600w.jpg',
            '17W64TH_LOWRES_07-1600w.jpg',
            '17W64TH_LOWRES_08-1600w.jpg',

            '17W64TH_LOWRES_09-1600w.jpg'
        ];
        $images['thumbs_dir'] = 'thumbs/';
        $images['thumbs'] = [
            '17W64TH_LOWRES_01-250w.jpg',
            '17W64TH_LOWRES_02-250w.jpg',
            '17W64TH_LOWRES_03-250w.jpg',
            '17W64TH_LOWRES_04-250w.jpg',

            '17W64TH_LOWRES_05-250w.jpg',
            '17W64TH_LOWRES_06-250w.jpg',
            '17W64TH_LOWRES_07-250w.jpg',
            '17W64TH_LOWRES_08-250w.jpg',

            '17W64TH_LOWRES_09-250w.jpg'
        ];
        return view('projects/manhattan/wooster-st', ['images' => $images]);
    }




}

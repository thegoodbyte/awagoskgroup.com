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

    public function brooklyn_warren_st() {
        $images['image_path'] = '/img/projects_gallery/brooklyn/warren_st/';
        $images['images'] = [
            '18_entr-IMG_7633-1600w.jpg' => [
                'sizes' =>  [
                    '400' => '18_entr-IMG_7633-400w.jpg',
                    '600' => '18_entr-IMG_7633-600w.jpg',
                    '900' => '18_entr-IMG_7633-900w.jpg',
                    '1200' => '18_entr-IMG_7633-1200w.jpg',
                    '1600' => '18_entr-IMG_7633-1600w.jpg',
                ]
            ],
            '01_entr-68928944856__8FA551E7-3A1A-4ABA-816E-7D926EDC2CB4-1200h.jpg' => [],
            '02_room-IMG_0444-1600w.jpg'=> [],
            '02-a-entr-window-68928944205__10EE5245-2E1F-4C52-A313-92D80C4F16CB-1200h.jpg'=> [],
            '03_room-IMG_0448-1200h.jpg'=> [],
            '04_room-IMG_0449-1200h.jpg'=> [],
            '05_room-IMG_0450-1200h.jpg'=> [],
            '06_mould-IMG_0451-1200h.jpg'=> [],
            '07_bath-IMG_0452-1200h.jpg'=> [],
            '08_mould-IMG_0453-1200h.jpg'=> [],
            '09_stairs-IMG_0454-1200h.jpg'=> [],
            '10_kitchen-IMG_4217_1200h.jpg'=> [],
            '11_room-IMG_4218-1200h.jpg'=> [],
            '15_mould-IMG_7621-1200h.jpg'=> []
        ];
        $images['thumbs_dir'] = '_thumbs/';
        $images['thumbs'] = [
            '18_entr-IMG_7633-1200h.jpg',
            '01_entr-68928944856__8FA551E7-3A1A-4ABA-816E-7D926EDC2CB4-1200h.jpg',
            '02_room-IMG_0444-1600w.jpg',
            '02-a-entr-window-68928944205__10EE5245-2E1F-4C52-A313-92D80C4F16CB-1200h.jpg',
            '03_room-IMG_0448-1200h.jpg',
            '04_room-IMG_0449-1200h.jpg',
            '05_room-IMG_0450-1200h.jpg',
            '06_mould-IMG_0451-1200h.jpg',
            '07_bath-IMG_0452-1200h.jpg',
            '08_mould-IMG_0453-1200h.jpg',
            '09_stairs-IMG_0454-1200h.jpg',
            '10_kitchen-IMG_4217_1200h.jpg',
            '11_room-IMG_4218-1200h.jpg',
            '15_mould-IMG_7621-1200h.jpg'
        ];

        return view('projects/brooklyn/warren-st', ['images' => $images]);
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

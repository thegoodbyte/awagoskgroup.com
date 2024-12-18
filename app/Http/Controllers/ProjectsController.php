<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\DirectoryImage;

class ProjectsController extends Controller
{
    //

    public function index() {

        return view('projects/index');
    }


    public function manhattan_west_64th() {
        $images['image_path'] = '/img/projects-galleries/manhattan/west-64th/galleries/main/01_17W64TH_LOWRES/';
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
        $images['galleries']['main']['image_path'] = '/img/projects-galleries/brooklyn/warren-st/galleries/main/';
        $images['galleries']['main']['images'] = [
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
        $images['galleries']['main']['thumbs_dir'] = '_thumbs/';
        $images['galleries']['main']['thumbs'] = [
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
        $images['image_path'] = '/img/projects-galleries/manhattan/west-64th/galleries/main/01_17W64TH_LOWRES/';
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
        $images['image_path'] = '/img/projects-galleries/manhattan/west-64th/galleries/main/01_17W64TH_LOWRES/';
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
    public function manhattan_64th_st() {
        $images['image_path'] = '/img/projects-galleries/manhattan/west-64th/galleries/main/01_17W64TH_LOWRES/';
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

    public function manhattan_sorens() {

        $di = new DirectoryImage('/img/projects-galleries/manhattan/sorens/galleries/main/');
        $diw = new DirectoryImage('/img/projects-galleries/brooklyn/warren-st/galleries/main/');

        echo '<pre>';

        $galleries['galleries']['main'] = $di->getGalleryArray();
        $galleries['galleries']['second'] = $diw->getGalleryArray();
        print_r($galleries);
//
//        $images['galleries']['main']['image_path'] = '/img/projects-galleries/manhattan/sorens/galleries/main/';
//        $images['galleries']['main']['images'] = [
//            '01_IMG_1346-1600w.jpg' => [],
//            '02_IMG_9388-1200h.jpg' => [],
//            '03_IMG_9390-1200h.jpg' => [],
//            '04_IMG_9394-1200h.jpg' => [],
//            '05_IMG_9396-1200h.jpg' => [],
//            '06_IMG_9398-1200h.jpg' => [],
//            '07_IMG_9399-1200h.jpg' => [],
//            '08_c003_IMG_0127-1600w.jpg' => [],
//            '09_IMG_1347-1600w.jpg' => [],
//            '10_MG_6999-1600w.jpg => []',
//            '11_c003-dwall-IMG_7001-1600w.jpg' => [],
//            '12_dwall-IMG_7002-1600w.jpg' => [],
//            '13_lights-IMG_7005-1200h.jpg' => [],
//            '14_IMG_9384-1200h.jpg' => [],
//            '15_IMG_9386-1200h.jpg' => [],
//            '16_IMG_9389-1200h.jpg' => [],
//            '17_IMG_9392-1200h.jpg' => [],
//            '18_IMG_9397-1200h.jpg' => []
//        ];
//        $images['galleries']['main']['thumbs_dir'] = 'thumbs/';
//        $images['galleries']['main']['thumbs'] = [
//            '01_IMG_1346-1600w.jpg',
//            '02_IMG_9388-1200h.jpg',
//            '03_IMG_9390-1200h.jpg',
//            '04_IMG_9394-1200h.jpg',
//            '05_IMG_9396-1200h.jpg',
//            '06_IMG_9398-1200h.jpg',
//            '07_IMG_9399-1200h.jpg',
//            '08_c003_IMG_0127-1600w.jpg',
//            '09_IMG_1347-1600w.jpg',
//            '10_MG_6999-1600w.jpg',
//            '11_c003-dwall-IMG_7001-1600w.jpg',
//            '12_dwall-IMG_7002-1600w.jpg',
//            '13_lights-IMG_7005-1200h.jpg',
//            '14_IMG_9384-1200h.jpg',
//            '15_IMG_9386-1200h.jpg',
//            '16_IMG_9389-1200h.jpg',
//            '17_IMG_9392-1200h.jpg',
//            '18_IMG_9397-1200h.jpg',
//        ];

       // print_r($galleries);
        return view('projects/manhattan/sorens', ['images' => $galleries]);
    }

    public function manhattan_wooster_st() {

        return view('projects/manhattan/soho-wooster');
    }

    public function manhattan_wooster_st_bath() {
        $images['galleries']['bath']['image_path'] = '/img/projects-galleries/manhattan/wooster/galleries/bath/';
        $images['galleries']['bath']['images'] = [
            '19_bath-IMG_6571 2-1600w.jpg' => [],
            '21_bath-IMG_6651 2-1600w.jpg' => [],
            '22_bath-IMG_6653 2-1600w.jpg' => [],
            '23_bath-IMG_6654-1600h.jpg' => [],
            '26_bath-IMG_6657-1600h.jpg' => [],
            '27_bath-IMG_6658 2-1600h.jpg' => [],
            '29_bath-IMG_6662 2-1600h.jpg' => [],
            '33_bath-IMG_6570.JPG' => [],
            '34_bath-IMG_6571-1600w.jpg' => [],
            '35_bath-IMG_6572-1600h.jpg' => [],
        ];
        $images['galleries']['bath']['thumbs_dir'] = 'thumbs/';
        $images['galleries']['bath']['thumbs'] = [
            '19_bath-IMG_6571 2-1600w.jpg',
            '21_bath-IMG_6651 2-1600w.jpg',
            '22_bath-IMG_6653 2-1600w.jpg',
            '23_bath-IMG_6654-1600h.jpg',
            '26_bath-IMG_6657-1600h.jpg',
            '27_bath-IMG_6658 2-1600h.jpg',
            '29_bath-IMG_6662 2-1600h.jpg',
            '33_bath-IMG_6570.JPG',
            '34_bath-IMG_6571-1600w.jpg',
            '35_bath-IMG_6572-1600h.jpg',
        ];
        return view('projects/manhattan/wooster-st-bath', ['images' => $images]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\DirectoryImage;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    //

    public function index() {

        return view('projects/index');
    }

    private function returnGalleryView($viewPath, $galleryPath, $galleryName = 'main') : View {

        $di = new DirectoryImage($galleryPath);

        $galleries[$galleryName] = $di->getGalleryArray();



        $data['galleries'] = $galleries;
        $data['galleryName'] = $galleryName;


//        echo '<pre />';
//       print_r($mixedData['galleryName']);
//
//        exit;
        return view($viewPath,['data' =>  $data]);

    }

    private function readJsonFile($jsonFilePath) {

        // Check if file exists
        if (!file_exists($jsonFilePath)) {
            return ['error' => 'JSON file ' . $jsonFilePath . ' not found'];
        }

        // Read the JSON file
        $jsonContent = file_get_contents($jsonFilePath);

        // Check if file reading was successful
        if ($jsonContent === false) {
            return ['error' => 'Unable to read JSON file'];
        }

        // Decode JSON to PHP array
        $data = json_decode($jsonContent, true);

        // Check if JSON decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ['error' => 'JSON decode error: ' . json_last_error_msg()];
        }

        return $data;

    }



    public function brooklyn_warren_st() {

        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/test/';
        $viewPath = 'projects.brooklyn.warren-st';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'test');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'Warren St Gallery']);
        }
    }

    public function brooklyn_water_st() {

        return view('projects.brooklyn.water-st');
    }

    public function manhattan_park_ave() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave/galleries/main/';
        $viewPath = 'projects/manhattan/park-ave';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'Park Ave Gallery']);
        }
    }

    public function manhattan_riverside_blvd() {

        $galleryPath =  '/img/projects-galleries/manhattan/riverside-blvd/galleries/main/';
        $viewPath = 'projects.manhattan.riverside-blvd';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st() {

        return view('projects.manhattan.west-64th.index');

    }

    public function manhattan_west_64th_st_interior() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/interior';
        $viewPath = 'projects.manhattan.west-64th.interior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'interior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'W64th Interior Gallery']);
        }
    }
    public function manhattan_west_64th_st_exterior() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/exterior';
        $viewPath = 'projects.manhattan.west-64th.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'exterior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'W64th Exterior Gallery']);
        }
    }

    public function manhattan_west_64th_st_kitchen() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/kitchen';
        $viewPath = 'projects.manhattan.west-64th.kitchen';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'kitchen');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'W64th: Kitchen Gallery']);
        }

    }

    public function manhattan_west_64th_st_wip() {

        return view('projects.manhattan.west-64th.wip.index');

    }



    public function manhattan_west_64th_st_wip_bath() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/bath';
        $viewPath = 'projects.manhattan.west-64th.wip.bath';

        $contentPathFile  = public_path() . $galleryPath . DIRECTORY_SEPARATOR . 'content.json';
        ////$content = $this->readJsonFile($contentPathFile);

//        echo '<pre /';
//        print_r($content['content']['paragraphs'][1]);
//        exit;
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'bath');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
          //  return view('errors.404', ['message' => 'Sorens Gallery']);
            echo $e->getMessage();
        }
    }

    public function manhattan_west_64th_st_wip_cabinetry() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/cabinetry';
        $viewPath = 'projects.manhattan.west-64th.wip.cabinetry';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'cabinetry');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_drywall() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/drywall';
        $viewPath = 'projects.manhattan.west-64th.wip.drywall';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'drywall');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_exterior() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/exterior';
        $viewPath = 'projects.manhattan.west-64th.wip.exterior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'exterior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_floors() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/floors';
        $viewPath = 'projects.manhattan.west-64th.wip.floors';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'floors');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_generic() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/generic';
        $viewPath = 'projects.manhattan.west-64th.wip.generic';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'generic');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_interior() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/interior';
        $viewPath = 'projects.manhattan.west-64th.wip.interior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'interior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_west_64th_st_wip_kitchen() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/kitchen';
        $viewPath = 'projects.manhattan.west-64th.wip.kitchen';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'kitchen');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }


    public function manhattan_sorens() {

        $galleryPath = '/img/projects-galleries/manhattan/sorens/galleries/main/';
        $viewPath = 'projects/manhattan/sorens';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'Sorens Gallery']);
        }
    }

    public function manhattan_wooster_st() {

        $galleryPath =  '/img/projects-galleries/brooklyn/wooster-st/galleries/main/';
        $viewPath = 'projects/brooklyn/wooster-st';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'Wooster St Gallery']);
        }
    }

    public function manhattan_wooster_st_bath() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster/galleries/bath/';
        $viewPath = 'projects/manhattan/wooster-st/bath';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'Wooster St: Bath Gallery']);
        }
    }


}

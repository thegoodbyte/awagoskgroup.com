<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\DirectoryImage;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ProjectsManhattanWest64thStreetController extends ProjectsController
{
    //

    public function index() {

        return view('projects/manhattan/west-64th/index');
    }

    public function wip_index() {

        return view('projects.manhattan.west-64th.wip.index');

    }


    public function interior() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/interior';
        $viewPath = 'projects.manhattan.west-64th.interior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'interior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'W64th Interior Gallery']);
        }
    }
    public function exterior() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/exterior';
        $viewPath = 'projects.manhattan.west-64th.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'exterior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.404', ['message' => 'W64th Exterior Gallery']);
        }
    }

    public function kitchen() {


        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/kitchen';
        $viewPath = 'projects.manhattan.west-64th.kitchen';
        try {

             $data = $this->returnGalleryView($viewPath, $galleryPath, 'kitchen');

             return $data;

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }





    }




    public function wip_bath() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/bath';
        $viewPath = 'projects.manhattan.west-64th.wip.bath';


        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'bath');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_cabinetry() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/cabinetry';
        $viewPath = 'projects.manhattan.west-64th.wip.cabinetry';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'cabinetry');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_drywall() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/drywall';
        $viewPath = 'projects.manhattan.west-64th.wip.drywall';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'drywall');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_exterior() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/exterior';
        $viewPath = 'projects.manhattan.west-64th.wip.exterior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'exterior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }



    public function wip_floors() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/floors';
        $viewPath = 'projects.manhattan.west-64th.wip.floors';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'floors');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_generic() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/generic';
        $viewPath = 'projects.manhattan.west-64th.wip.generic';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'generic');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_interior() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/interior';
        $viewPath = 'projects.manhattan.west-64th.wip.interior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'interior');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_kitchen() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/kitchen';
        $viewPath = 'projects.manhattan.west-64th.wip.kitchen';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'kitchen');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_stairs() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/stairs';
        $viewPath = 'projects.manhattan.west-64th.wip.stairs';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'stairs');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function wip_windows() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/wip/windows';
        $viewPath = 'projects.manhattan.west-64th.wip.windows';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath, 'windows');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }


}

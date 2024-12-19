<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\DirectoryImage;
use Illuminate\View\View;

class ProjectsController extends Controller
{
    //

    public function index() {

        return view('projects/index');
    }

    private function returnGalleryView($viewPath, $galleryPath) : View {

        $di = new DirectoryImage($galleryPath);

        $galleries['galleries']['main'] = $di->getGalleryArray();

        #####echo '<pre />';

        #####print_r($galleries);

        return view($viewPath, ['images' => $galleries]);

    }


    public function manhattan_west_64th() {

        $galleryPath = '/img/projects-galleries/manhattan/west-64th/galleries/main/';
        $viewPath = 'projects/manhattan/west-64th';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }

    public function brooklyn_warren_st() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/main/';
        $viewPath = 'projects/brooklyn/warren-st';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }

    public function manhattan_park_ave() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave/galleries/main/';
        $viewPath = 'projects/manhattan/park-ave';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }

    public function manhattan_riverside_blvd() {

        $galleryPath =  '/img/projects-galleries/manhattan/riverside-blvd/galleries/main/';
        $viewPath = 'projects/manhattan/riverside-blvd';

        return $this->returnGalleryView($viewPath, $galleryPath);

    }

    public function manhattan_64th_st() {

        $galleryPath =  '/img/projects-galleries/manhattan/west-64th/galleries/main/';
        $viewPath = 'projects/manhattan/wooster-st';

        return $this->returnGalleryView($viewPath, $galleryPath);

    }



    public function manhattan_sorens() {

        $galleryPath = '/img/projects-galleries/manhattan/sorens/galleries/main/';
        $viewPath = 'projects/manhattan/sorens';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }

    public function manhattan_wooster_st() {

        $galleryPath =  '/img/projects-galleries/brooklyn/wooster-st/galleries/main/';
        $viewPath = 'projects/brooklyn/wooster-st';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }

    public function manhattan_wooster_st_bath() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster/galleries/bath/';
        $viewPath = 'projects/manhattan/wooster-st/bath';

        return $this->returnGalleryView($viewPath, $galleryPath);
    }


}

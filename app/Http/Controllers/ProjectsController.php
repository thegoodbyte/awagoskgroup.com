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

    protected function returnGalleryView($viewPath, $galleryPath, $galleryName = 'main') : View {

        $di = new DirectoryImage($galleryPath);

        $galleries[$galleryName] = $di->getGalleryArray();
//                echo '<pre />';
//        print_r($galleries);
//        exit;


        $data['galleries'] = $galleries;
        $data['galleryName'] = $galleryName;


//        echo '<pre />';
//        print_r($data);
//        exit;
        return view($viewPath, ['data' =>  $data]);

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
        return view('projects.brooklyn.warren-st.index');
    }

    public function brooklyn_warren_st_exterior() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/exterior';
        $viewPath = 'projects.brooklyn.warren-st.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_main() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/main';
        $viewPath = 'projects.brooklyn.water-st.main';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_bath() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/bath';
        $viewPath = 'projects.brooklyn.warren-st.bath';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip() {

        return view('projects.brooklyn.warren-st.wip.index');
    }

    public function brooklyn_warren_st_wip_bath() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/bath';
        $viewPath = 'projects.brooklyn.warren-st.wip.bath';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_cabinetry() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/cabinetry';
        $viewPath = 'projects.brooklyn.warren-st.wip.cabinetry';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_drywall() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/drywall';
        $viewPath = 'projects.brooklyn.warren-st.wip.drywall';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_doors_windows() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/doors_windows';
        $viewPath = 'projects.brooklyn.warren-st.wip.doors-windows';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_exterior() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/exterior';
        $viewPath = 'projects.brooklyn.warren-st.wip.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_fireplace() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/fireplace';
        $viewPath = 'projects.brooklyn.warren-st.wip.fireplace';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_floors() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/floors';
        $viewPath = 'projects.brooklyn.warren-st.wip.floors';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_generic() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/generic';
        $viewPath = 'projects.brooklyn.warren-st.wip.generic';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_stairs() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/stairs';
        $viewPath = 'projects.brooklyn.warren-st.wip.stairs';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_warren_st_wip_millwork() {
        $galleryPath =  '/img/projects-galleries/brooklyn/warren-st/galleries/wip/millwork';
        $viewPath = 'projects.brooklyn.warren-st.wip.millwork';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st() {

        return view('projects.brooklyn.water-st.index');
    }

    public function brooklyn_water_st_exterior() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/exterior';
        $viewPath = 'projects.brooklyn.water-st.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st_main() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/main';
        $viewPath = 'projects.brooklyn.water-st.main';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st_stairs() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/stairs';
        $viewPath = 'projects.brooklyn.water-st.stairs';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st_wip() {

        return view('projects.brooklyn.water-st.wip.index');
    }

    public function brooklyn_water_st_wip_cabinetry() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/wip/cabinetry';
        $viewPath = 'projects.brooklyn.water-st.wip.cabinetry';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st_wip_generic() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/wip/generic';
        $viewPath = 'projects.brooklyn.water-st.wip.generic';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function brooklyn_water_st_wip_stairs() {
        $galleryPath =  '/img/projects-galleries/brooklyn/water-st/galleries/wip/stairs';
        $viewPath = 'projects.brooklyn.water-st.wip.stairs';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_central_park_south() {
        return view('projects.manhattan.central-park-south.index');
    }

    public function manhattan_central_park_south_main() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/main';
        $viewPath = 'projects.manhattan.central-park-south.main';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_central_park_south_wip_drywall() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/wip/drywall';
        $viewPath = 'projects.manhattan.central-park-south.wip.drywall';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }

    }

    public function manhattan_central_park_south_wip_generic_work() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/wip/generic';
        $viewPath = 'projects.manhattan.central-park-south.wip.generic';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_central_park_south_wip_kitchen() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/wip/kitchen';
        $viewPath = 'projects.manhattan.central-park-south.wip.kitchen';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_central_park_south_wip() {
        return view('projects.manhattan.central-park-south.wip.index');
    }

    public function manhattan_central_park_south_wip_bath() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/wip/bath';
        $viewPath = 'projects.manhattan.central-park-south.wip.bath';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_central_park_south_wip_cabinetry() {
        $galleryPath =  '/img/projects-galleries/manhattan/central-park-south/galleries/wip/cabinetry';
        $viewPath = 'projects.manhattan.central-park-south.wip.cabinetry';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_park_ave() {
        return view('projects.manhattan.park-ave.index');
    }

    public function manhattan_park_ave_interior() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave/galleries/interior';
        $viewPath = 'projects.manhattan.park-ave.interior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_park_ave_exterior() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave/galleries/exterior';
        $viewPath = 'projects.manhattan.park-ave.exterior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }



    public function manhattan_park_ave_wip() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave/galleries/wip';
        $viewPath = 'projects.manhattan.park-ave.wip';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_park_ave_69th_street_index() {
        return view('projects.manhattan.park-ave-69th-street.index');
    }

    public function manhattan_park_ave_69th_street_wip() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave-69th-street/galleries/wip';
        $viewPath = 'projects.manhattan.park-ave-69th-street.wip';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_park_ave_69th_street_main() {
        $galleryPath =  '/img/projects-galleries/manhattan/park-ave-69th-street/galleries/main';
        $viewPath = 'projects.manhattan.park-ave-69th-street.main';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_riverside_blvd() {
        return view('projects.manhattan.riverside-blvd.index');
    }

    public function manhattan_riverside_blvd_wip() {

        $galleryPath =  '/img/projects-galleries/manhattan/riverside-blvd/galleries/wip';
        $viewPath = 'projects.manhattan.riverside-blvd.wip';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_riverside_blvd_interior() {

        $galleryPath =  '/img/projects-galleries/manhattan/riverside-blvd/galleries/interior';
        $viewPath = 'projects.manhattan.riverside-blvd.interior';
        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }



    public function manhattan_sorens() {

        $galleryPath = '/img/projects-galleries/manhattan/sorens/galleries/main/';
        $viewPath = 'projects.manhattan.sorens';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_irving() {

        $galleryPath =  '/img/projects-galleries/manhattan/irving/galleries/main/';
        $viewPath = 'projects/manhattan/irving';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_hudson() {
        return view('projects.manhattan.hudson.index');
    }

    public function manhattan_hudson_interior() {

        $galleryPath =  '/img/projects-galleries/manhattan/hudson/galleries/interior';
        $viewPath = 'projects.manhattan.hudson.interior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_hudson_wip() {

        $galleryPath =  '/img/projects-galleries/manhattan/hudson/galleries/wip';
        $viewPath = 'projects.manhattan.hudson.wip';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_wooster_st() {
        return view('projects.manhattan.wooster-st.index');
    }


    public function manhattan_wooster_st_interior() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster-st/galleries/interior';
        $viewPath = 'projects.manhattan.wooster-st.interior';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_wooster_st_bath() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster-st/galleries/bath';
        $viewPath = 'projects.manhattan.wooster-st.bath';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_wooster_st_wip() {
        return view('projects.manhattan.wooster-st.wip.index');
    }

    public function manhattan_wooster_st_wip_drywall() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster-st/galleries/wip/drywall';
        $viewPath = 'projects.manhattan.wooster-st.wip.drywall';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

    public function manhattan_wooster_st_wip_generic() {

        $galleryPath =  '/img/projects-galleries/manhattan/wooster-st/galleries/wip/generic';
        $viewPath = 'projects.manhattan.wooster-st.wip.generic';

        try {
            return $this->returnGalleryView($viewPath, $galleryPath);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return view('errors.error', ['message' => $e->getMessage()]);
        }
    }

}

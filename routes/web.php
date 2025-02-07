<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectsManhattanWest64thStreetController;
use App\Http\Controllers\ServicesController;

Route::get('/',[HomeController::class,'index']);

// these are there to test
Route::get('/gallery',[HomeController::class,'gallery']);
Route::get('/fullscreen-gallery',[HomeController::class,'fullscreen_gallery']);
Route::get('/bloglist',[HomeController::class,'bloglist']);
Route::get('/paralax',[HomeController::class,'paralax']);


Route::get('/contact-us',[HomeController::class,'contact_us']);
Route::get('/about-us',[HomeController::class,'about_us']);

// Projects
Route::get('/projects/manhattan/central-park-south',[ProjectsController::class,'manhattan_central_park_south'])->name('projects.manhattan.central-park-south.index');
Route::get('/projects/manhattan/central-park-south/main',[ProjectsController::class,'manhattan_central_park_south_main'])->name('projects.manhattan.central-park-south.main');
Route::get('/projects/manhattan/central-park-south/wip',[ProjectsController::class,'manhattan_central_park_south_wip'])->name('projects.manhattan.central-park-south.wip.index');
Route::get('/projects/manhattan/central-park-south/wip/bath',[ProjectsController::class,'manhattan_central_park_south_wip_bath'])->name('projects.manhattan.central-park-south.wip.bath');
Route::get('/projects/manhattan/central-park-south/wip/cabinetry',[ProjectsController::class,'manhattan_central_park_south_wip_cabinetry'])->name('projects.manhattan.central-park-south.wip.cabinetry');
Route::get('/projects/manhattan/central-park-south/wip/generic_work',[ProjectsController::class,'manhattan_central_park_south_wip_generic_work'])->name('projects.manhattan.central-park-south.wip.generic-work');
Route::get('/projects/manhattan/central-park-south/wip/kitchen',[ProjectsController::class,'manhattan_central_park_south_wip_kitchen'])->name('projects.manhattan.central-park-south.wip.kitchen');
Route::get('/projects/manhattan/central-park-south/wip/drywall',[ProjectsController::class,'manhattan_central_park_south_wip_drywall'])->name('projects.manhattan.central-park-south.wip.drywall');

Route::get('/projects/manhattan/park-ave',[ProjectsController::class,'manhattan_park_ave'])->name('projects.manhattan.park-ave.index');
Route::get('/projects/manhattan/park-ave/interior',[ProjectsController::class,'manhattan_park_ave_interior'])->name('projects.manhattan.park-ave.interior');
Route::get('/projects/manhattan/park-ave/exterior',[ProjectsController::class,'manhattan_park_ave_exterior'])->name('projects.manhattan.park-ave.exterior');
Route::get('/projects/manhattan/park-ave/wip',[ProjectsController::class,'manhattan_park_ave_wip'])->name('projects.manhattan.park-ave.wip');

Route::get('/projects/manhattan/west-64th',[ProjectsManhattanWest64thStreetController::class,'index'])->name('projects.manhattan.west-64th');
Route::get('/projects/manhattan/west-64th/interior',[ProjectsManhattanWest64thStreetController::class,'interior'])->name('projects.manhattan.west-64th.interior');
Route::get('/projects/manhattan/west-64th/exterior',[ProjectsManhattanWest64thStreetController::class,'exterior'])->name('projects.manhattan.west-64th.exterior');
Route::get('/projects/manhattan/west-64th/kitchen',[ProjectsManhattanWest64thStreetController::class,'kitchen'])->name('projects.manhattan.west-64th.kitchen');
Route::get('/projects/manhattan/west-64th/wip',[ProjectsManhattanWest64thStreetController::class,'wip_index'])->name('projects.manhattan.west-64th.wip.index');
Route::get('/projects/manhattan/west-64th/wip/kitchen',[ProjectsManhattanWest64thStreetController::class,'wip_kitchen'])->name('projects.manhattan.west-64th.wip.kitchen');
Route::get('/projects/manhattan/west-64th/wip/bath',[ProjectsManhattanWest64thStreetController::class,'wip_bath'])->name('projects.manhattan.west-64th.wip.bath');
Route::get('/projects/manhattan/west-64th/wip/custom-cabinetry',[ProjectsManhattanWest64thStreetController::class,'wip_cabinetry'])->name('projects.manhattan.west-64th.wip.custom-cabinetry');
Route::get('/projects/manhattan/west-64th/wip/drywall',[ProjectsManhattanWest64thStreetController::class,'wip_drywall'])->name('projects.manhattan.west-64th.wip.drywall');
Route::get('/projects/manhattan/west-64th/wip/exterior',[ProjectsManhattanWest64thStreetController::class,'wip_exterior'])->name('projects.manhattan.west-64th.wip.exterior');
Route::get('/projects/manhattan/west-64th/wip/floors',[ProjectsManhattanWest64thStreetController::class,'wip_floors'])->name('projects.manhattan.west-64th.wip.floors');
Route::get('/projects/manhattan/west-64th/wip/generic-work',[ProjectsManhattanWest64thStreetController::class,'wip_generic'])->name('projects.manhattan.west-64th.wip.generic-work');
Route::get('/projects/manhattan/west-64th/wip/interior',[ProjectsManhattanWest64thStreetController::class,'wip_interior'])->name('projects.manhattan.west-64th.wip.interior');
Route::get('/projects/manhattan/west-64th/wip/stairs',[ProjectsManhattanWest64thStreetController::class,'wip_stairs'])->name('projects.manhattan.west-64th.wip.stairs');
Route::get('/projects/manhattan/west-64th/wip/windows',[ProjectsManhattanWest64thStreetController::class,'wip_windows'])->name('projects.manhattan.west-64th.wip.windows');

Route::get('/projects/manhattan/riverside-blvd',[ProjectsController::class,'manhattan_riverside_blvd'])->name('projects.manhattan.riverside-blvd.index');
Route::get('/projects/manhattan/riverside-blvd/interior',[ProjectsController::class,'manhattan_riverside_blvd_interior'])->name('projects.manhattan.riverside-blvd.interior');
Route::get('/projects/manhattan/riverside-blvd/wip',[ProjectsController::class,'manhattan_riverside_blvd_wip'])->name('projects.manhattan.riverside-blvd.wip');

Route::get('/projects/manhattan/wooster-st',[ProjectsController::class,'manhattan_wooster_st'])->name('projects.manhattan.wooster-st.index');
Route::get('/projects/manhattan/wooster-st/interior',[ProjectsController::class,'manhattan_wooster_st_interior'])->name('projects.manhattan.wooster-st.interior');
Route::get('/projects/manhattan/wooster-st/bath',[ProjectsController::class,'manhattan_wooster_st_bath'])->name('projects.manhattan.wooster-st.bath');
Route::get('/projects/manhattan/wooster-st/wip',[ProjectsController::class,'manhattan_wooster_st_wip'])->name('projects.manhattan.wooster-st.wip.index');
Route::get('/projects/manhattan/wooster-st/wip/drywall',[ProjectsController::class,'manhattan_wooster_st_wip_drywall'])->name('projects.manhattan.wooster-st.wip.drywall');
Route::get('/projects/manhattan/wooster-st/wip/generic-work',[ProjectsController::class,'manhattan_wooster_st_wip_generic'])->name('projects.manhattan.wooster-st.wip.generic-work');


Route::get('/projects/manhattan/sorens', [ProjectsController::class,'manhattan_sorens'])->name('projects.manhattan.sorens');
Route::get('/projects/manhattan/irving', [ProjectsController::class, 'manhattan_irving'])->name('projects.manhattan.irving');

Route::get('/projects/manhattan/hudson', [ProjectsController::class, 'manhattan_hudson'])->name('projects.manhattan.hudson.index');
Route::get('/projects/manhattan/hudson/interior', [ProjectsController::class, 'manhattan_hudson_interior'])->name('projects.manhattan.hudson.interior');
Route::get('/projects/manhattan/hudson/wip', [ProjectsController::class, 'manhattan_hudson_wip'])->name('projects.manhattan.hudson.wip');

Route::get('/projects/brooklyn/warren-st',[ProjectsController::class,'brooklyn_warren_st'])->name('projects.brooklyn.warren-st.index');
Route::get('/projects/brooklyn/warren-st/exterior',[ProjectsController::class,'brooklyn_warren_st_exterior'])->name('projects.brooklyn.warren-st.exterior');
Route::get('/projects/brooklyn/warren-st/main',[ProjectsController::class,'brooklyn_warren_st_main'])->name('projects.brooklyn.warren-st.main');
Route::get('/projects/brooklyn/warren-st/bath',[ProjectsController::class,'brooklyn_warren_st_bath'])->name('projects.brooklyn.warren-st.bath');
Route::get('/projects/brooklyn/warren-st/wip',[ProjectsController::class,'brooklyn_warren_st_wip'])->name('projects.brooklyn.warren-st.wip.index');
Route::get('/projects/brooklyn/warren-st/wip/bath',[ProjectsController::class,'brooklyn_warren_st_wip_bath'])->name('projects.brooklyn.warren-st.wip.bath');
Route::get('/projects/brooklyn/warren-st/wip/cabinetry',[ProjectsController::class,'brooklyn_warren_st_wip_cabinetry'])->name('projects.brooklyn.warren-st.wip.cabinetry');
Route::get('/projects/brooklyn/warren-st/wip/doors-windows',[ProjectsController::class,'brooklyn_warren_st_wip_doors_windows'])->name('projects.brooklyn.warren-st.wip.doors-windows');
Route::get('/projects/brooklyn/warren-st/wip/drywall',[ProjectsController::class,'brooklyn_warren_st_wip_drywall'])->name('projects.brooklyn.warren-st.wip.drywall');
Route::get('/projects/brooklyn/warren-st/wip/exterior',[ProjectsController::class,'brooklyn_warren_st_wip_exterior'])->name('projects.brooklyn.warren-st.wip.exterior');
Route::get('/projects/brooklyn/warren-st/wip/fireplace',[ProjectsController::class,'brooklyn_warren_st_wip_fireplace'])->name('projects.brooklyn.warren-st.wip.fireplace');
Route::get('/projects/brooklyn/warren-st/wip/floors',[ProjectsController::class,'brooklyn_warren_st_wip_floors'])->name('projects.brooklyn.warren-st.wip.floors');
Route::get('/projects/brooklyn/warren-st/wip/generic',[ProjectsController::class,'brooklyn_warren_st_wip_generic'])->name('projects.brooklyn.warren-st.wip.generic');
Route::get('/projects/brooklyn/warren-st/wip/stairs',[ProjectsController::class,'brooklyn_warren_st_wip_stairs'])->name('projects.brooklyn.warren-st.wip.stairs');
Route::get('/projects/brooklyn/warren-st/wip/millwork',[ProjectsController::class,'brooklyn_warren_st_wip_millwork'])->name('projects.brooklyn.warren-st.wip.millwork');


Route::get('/projects/brooklyn/water-st',[ProjectsController::class,'brooklyn_water_st'])->name('projects.brooklyn.water-st.index');
Route::get('/projects/brooklyn/water-st/exterior',[ProjectsController::class,'brooklyn_water_st_exterior'])->name('projects.brooklyn.water-st.exterior');
Route::get('/projects/brooklyn/water-st/main',[ProjectsController::class,'brooklyn_water_st_main'])->name('projects.brooklyn.water-st.main');
Route::get('/projects/brooklyn/water-st/stairs',[ProjectsController::class,'brooklyn_water_st_stairs'])->name('projects.brooklyn.water-st.stairs');
Route::get('/projects/brooklyn/water-st/wip',[ProjectsController::class,'brooklyn_water_st_wip'])->name('projects.brooklyn.water-st.wip.index');
Route::get('/projects/brooklyn/water-st/wip/cabinetry',[ProjectsController::class,'brooklyn_water_st_wip_cabinetry'])->name('projects.brooklyn.water-st.wip.cabinetry');
Route::get('/projects/brooklyn/water-st/wip/generic',[ProjectsController::class,'brooklyn_water_st_wip_generic'])->name('projects.brooklyn.water-st.wip.generic');
Route::get('/projects/brooklyn/water-st/wip/stairs',[ProjectsController::class,'brooklyn_water_st_wip_stairs'])->name('projects.brooklyn.water-st.wip.stairs');

// services
Route::get('/services/renovations-remodeling',[ServicesController::class,'remodeling_renovations'])->name('services.remodeling-renovations');
Route::get('/services/custom-kitchens',[ServicesController::class,'custom_kitchens'])->name('services.custom-kitchens');
Route::get('/services/custom-spaces',[ServicesController::class,'custom_spaces'])->name('services.custom-spaces');
Route::get('/services/custom-bathrooms',[ServicesController::class,'custom_bathrooms'])->name('services.custom-bathrooms');
Route::get('/services/stairways',[ServicesController::class,'stairways'])->name('services.stairways');
Route::get('/services/outdoor-living-spaces',[ServicesController::class,'outdoor_living_spaces'])->name('services.outdoor-living-spaces');
Route::get('/services/smart-home-integration',[ServicesController::class,'smart_home_integration'])->name('services.smart-home-integration');


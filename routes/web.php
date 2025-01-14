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
Route::get('/projects/manhattan/central-park-south/wip',[ProjectsController::class,'manhattan_central_park_south_wip'])->name('projects.manhattan.central-park-south.wip');
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

Route::get('/projects/manhattan/wooster-st',[ProjectsController::class,'manhattan_wooster_st']);

Route::get('/projects/manhattan/wooster-st',[ProjectsController::class,'manhattan_wooster_st']);
Route::get('/projects/manhattan/wooster-st/bath',[ProjectsController::class,'manhattan_wooster_st_bath']);
Route::get('/projects/manhattan/sorens', [ProjectsController::class,'manhattan_sorens']);
Route::get('/projects/manhattan/irving', [ProjectsController::class, 'manhattan_irving'])->name('projects.manhattan.irving');

Route::get('/projects/manhattan/hudson', [ProjectsController::class, 'manhattan_hudson'])->name('projects.manhattan.hudson.index');
Route::get('/projects/manhattan/hudson/interior', [ProjectsController::class, 'manhattan_hudson_interior'])->name('projects.manhattan.hudson.interior');
Route::get('/projects/manhattan/hudson/wip', [ProjectsController::class, 'manhattan_hudson_wip'])->name('projects.manhattan.hudson.wip');

Route::get('/projects/brooklyn/warren-st',[ProjectsController::class,'brooklyn_warren_st']);
Route::get('/projects/brooklyn/water-st',[ProjectsController::class,'brooklyn_water_st']);

// services
Route::get('/services/renovations-remodeling',[ServicesController::class,'remodeling_renovations']);
Route::get('/services/custom-kitchens',[ServicesController::class,'custom_kitchens']);
Route::get('/services/custom-bathrooms',[ServicesController::class,'custom_bathrooms']);
Route::get('/services/stairways',[ServicesController::class,'stairways']);
Route::get('/services/custom-living-spaces',[ServicesController::class,'custom_licing_spaces']);
Route::get('/services/smart-home-integration',[ServicesController::class,'smart_home_integration']);


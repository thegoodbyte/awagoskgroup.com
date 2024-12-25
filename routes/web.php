<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
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
Route::get('/projects/manhattan/park-ave',[ProjectsController::class,'manhattan_park_ave']);
Route::get('/projects/manhattan/west-64th',[ProjectsController::class,'manhattan_west_64th_st']);
Route::get('/projects/manhattan/west-64th/interior',[ProjectsController::class,'manhattan_west_64th_st_interior']);
Route::get('/projects/manhattan/west-64th/exterior',[ProjectsController::class,'manhattan_west_64th_st_exterior']);
Route::get('/projects/manhattan/west-64th/kitchen',[ProjectsController::class,'manhattan_west_64th_st_kitchen']);

Route::get('/projects/manhattan/west-64th/wip',[ProjectsController::class,'manhattan_west_64th_st_wip']);
Route::get('/projects/manhattan/west-64th/wip/kitchen',[ProjectsController::class,'manhattan_west_64th_st_wip_kitchen']);
Route::get('/projects/manhattan/west-64th/wip/bath',[ProjectsController::class,'manhattan_west_64th_st_wip_bath']);
Route::get('/projects/manhattan/west-64th/wip/floors',[ProjectsController::class,'manhattan_west_64th_st_wip_floors']);
Route::get('/projects/manhattan/west-64th/wip/custom-cabinetry',[ProjectsController::class,'manhattan_west_64th_st_wip_cabinetry']);
Route::get('/projects/manhattan/west-64th/wip/drywall',[ProjectsController::class,'manhattan_west_64th_st_wip_drywall']);


Route::get('/projects/manhattan/wooster-st',[ProjectsController::class,'manhattan_wooster_st']);
Route::get('/projects/manhattan/riverside-blvd',[ProjectsController::class,'manhattan_riverside_blvd']);
Route::get('/projects/manhattan/wooster-st',[ProjectsController::class,'manhattan_wooster_st']);
Route::get('/projects/manhattan/wooster-st/bath',[ProjectsController::class,'manhattan_wooster_st_bath']);
Route::get('/projects/manhattan/sorens',[ProjectsController::class,'manhattan_sorens']);

Route::get('/projects/brooklyn/warren-st',[ProjectsController::class,'brooklyn_warren_st']);
Route::get('/projects/brooklyn/water-st',[ProjectsController::class,'brooklyn_water_st']);

// services
Route::get('/services/renovations-remodeling',[ServicesController::class,'remodeling_renovations']);
Route::get('/services/custom-kitchens',[ServicesController::class,'custom_kitchens']);
Route::get('/services/custom-bathrooms',[ServicesController::class,'custom_bathrooms']);
Route::get('/services/stairways',[ServicesController::class,'stairways']);
Route::get('/services/custom-living-spaces',[ServicesController::class,'custom_licing_spaces']);
Route::get('/services/smart-home-integration',[ServicesController::class,'smart_home_integration']);


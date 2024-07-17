<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;

Route::get('/',[HomeController::class,'index']);
Route::get('/gallery',[HomeController::class,'gallery']);
Route::get('/fullscreen-gallery',[HomeController::class,'fullscreen_gallery']);
Route::get('/bloglist',[HomeController::class,'bloglist']);
Route::get('/paralax',[HomeController::class,'paralax']);


Route::get('/contact-us',[HomeController::class,'contact_us']);
Route::get('/about-us',[HomeController::class,'about_us']);


Route::get('/projects/manhattan-park-ave',[ProjectsController::class,'manhattan_park_ave']);
Route::get('/projects/manhattan-west-64th',[ProjectsController::class,'manhattan_west_64th']);
Route::get('/projects/manhattan-wooster-st',[ProjectsController::class,'manhattan_wooster_st']);
Route::get('/projects/manhattan-riverside-blvd',[ProjectsController::class,'manhattan_riverside_blvd']);
Route::get('/projects/brooklyn-warrent-st',[ProjectsController::class,'brooklyn_warrent_st']);

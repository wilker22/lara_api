<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/chartdata', [ChartController::class, 'onAllSelect']);
Route::get('/clientreview', [ClientReviewController::class, 'onAllSelect']);
Route::post('/contactsend', [ContactController::class, 'onContactSend']);
//endpoint Courses
Route::get('/coursehome', [CoursesController::class, 'onSelectFour']);
Route::get('/courseall', [CoursesController::class, 'onSelectAll']);
Route::get('/coursedetails', [CoursesController::class, 'onSelectDetails']);
//Footer
Route::get('/footerdata', [FooterController::class, 'onAllSelect']);
//Information
Route::get('/information', [InformationController::class, 'onAllSelect']);
//services
Route::get('/services', [ServiceController::class, 'serviceView']);
//Projects
Route::get('/projecthome', [ProjectController::class, 'onSelectThree']);
Route::get('/projectall', [ProjectController::class, 'onSelectAll']);

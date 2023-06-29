<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
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
<?php

use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\ClientReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/chartdata', [ChartController::class, 'onAllSelect']);
Route::get('/clientreview', [ClientReviewController::class, 'onAllSelect']);
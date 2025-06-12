<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
// Route::get('/', function () {
//     return view('welcome');
// });

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use Symfony\Component\HttpKernel\Profiler\Profile;


Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/artikel/{slug}', [LandingPageController::class, 'show'])->name('post.show');

// Route::get('/', function () {
//     return view('welcome');
// });

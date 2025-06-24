<?php

use App\Http\Controllers\Api\RegisterClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use Symfony\Component\HttpKernel\Profiler\Profile;


Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/artikel/{slug}', [LandingPageController::class, 'show'])->name('post.show');
Route::get('/pages/faq', [LandingPageController::class, 'faq'])->name('pages.faq');
Route::get('/pages/artikel', [LandingPageController::class, 'artikel'])->name('pages.artikel');


// Route::get('/', function () {
//     return view('welcome');
// });

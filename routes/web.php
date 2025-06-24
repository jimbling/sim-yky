<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactMessageController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\Api\RegisterClientController;


Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');
Route::get('/artikel/{slug}', [LandingPageController::class, 'show'])->name('post.show');
Route::get('/pages/faq', [LandingPageController::class, 'faq'])->name('pages.faq');
Route::get('/pages/artikel', [LandingPageController::class, 'artikel'])->name('pages.artikel');
Route::post('/contact/send', [ContactMessageController::class, 'store'])->name('contact.send');

// Route::get('/', function () {
//     return view('welcome');
// });

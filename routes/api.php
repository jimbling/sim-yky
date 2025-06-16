<?php
// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PatchApiController;
use App\Http\Controllers\Api\RegisterClientController;
use App\Http\Controllers\Api\SchoolTokenApiController;

Route::post('/register-client', RegisterClientController::class);
Route::post('/confirm-token-used', [SchoolTokenApiController::class, 'confirmTokenUsed']);
Route::post('/patch/check', [PatchApiController::class, 'check']);

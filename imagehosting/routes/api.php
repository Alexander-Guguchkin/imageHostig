<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', [ ImageController::class, 'getImagesJson' ])->name("getImagesJson");
Route::get('/getImage/{id}', [ ImageController::class, 'getImageJson' ])->name("getImageJson");

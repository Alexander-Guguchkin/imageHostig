<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view("home");
});
Route::post('/addImages', [ ImageController::class, 'addImages' ])->name("addImages");
Route::get('/getImages', [ ImageController::class, 'getImages' ])->name("getImages");
Route::get('/deleteImages/{id}', [ ImageController::class, 'deleteImages' ])->name("deleteImages");
Route::get('/unicalName/{filename}', [ ImageController::class, 'unicalName' ]);

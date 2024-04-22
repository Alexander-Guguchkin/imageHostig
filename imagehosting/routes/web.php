<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;


Route::get('/', [ ImageController::class, 'getImages' ])->name("getImages");
Route::post('/addImages', [ ImageController::class, 'addImages' ])->name("addImages");
Route::get('/getImage/{id}', [ ImageController::class, 'getImage' ])->name("getImage");
Route::get('/unicalName/{filename}', [ ImageController::class, 'unicalName' ])->name("unicalName");
Route::get('/sortedByName', [ ImageController::class, 'sortedByName' ])->name("sortedByName");
Route::get('/sortedByDate', [ ImageController::class, 'sortedByDate' ])->name("sortedByDate");
Route::get('/downloadImage/{id}', [ ImageController::class, 'downloadImage' ])->name("downloadImage");

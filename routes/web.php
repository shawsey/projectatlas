<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/// Route for Dashboard page loaded in at site root.
Route::get('/', function () {
    return view('welcome');
});

/// Route for submitting an image to the daily posts page.
Route::get('/submit',[ImageUploadController::class,'addImage'])->name('images.add');
/// Route for storing an image.
Route::post('/store-submission',[ImageUploadController::class,'storeImage'])->name('images.store');
/// Route for viewing an image that is submitted.
Route::get('/view-submission',[ImageUploadController::class,'viewImage'])->name('images.view');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/submission', function () {
    return view('submission');
})->name('submission');


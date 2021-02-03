<?php

// use to add controllers route
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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

// Home route
Route::get('/' , [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view("auth.login");
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

// Route group with catalog prefix
Route::group(['prefix' => 'catalog'], function () {
    // Catalog's index route
    Route::get('/', [CatalogController::class, 'getIndex']);

    // Detail view of specific item in movies catalog
    Route::get('show/{id}', [CatalogController::class, 'getShow']);

    // Form to upload a new item. Add a new movie to catalog
    Route::get('create', [CatalogController::class, 'getCreate']);

    // Form to edit an existing item in movies catalog
    Route::get('edit/{id}', [CatalogController::class, 'getEdit']);
});

// Adminer route to admin DDBB
Route::any('adminer', '\Aranyasen\LaravelAdminer\AdminerController@index');
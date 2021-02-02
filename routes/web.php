<?php

# En Laravel 8 la forma de llamar a los controladores cambia, hay que incluir la ruta del controlador con use
use App\Http\Controllers\HomeController;
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
    Route::get('/', function () { 
        return view("catalog.index");
    });
    // Detail view of specific item in movies catalog
    Route::get('show/{id}', function ($id) {
        return view('catalog.show', array('id'=>$id));
    });
    // Form to upload a new item. Add a new movie to catalog
    Route::get('create', function () { 
        return view("catalog.create");
    });
    // Form to edit an existing item in movies catalog
    Route::get('edit/{id}', function ($id) {
        return view("catalog.edit", array('id'=>$id));
    });
});
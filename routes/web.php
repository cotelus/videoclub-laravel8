<?php

# En Laravel 8 la forma de llamar a los controladores cambia, hay que incluir la ruta del controlador con use
use App\Http\Controllers\UserController;
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

# RUTAS EJERCICIOS
Route::get('/', function () {
    return view("home", array('nombre'=>"Juan"));
});

Route::get('/login', function () {
    return view("auth.login");
});

Route::get('/logout', function () {
    return 'Logout usuario';
});

/*
Route::get('/catalog', function () {
    return view("catalog.index");
});

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show', array('id'=>$id));
});

Route::get('/catalog/create', function () {
    return view("catalog.create");
});

Route::get('/catalog/edit/{id}', function ($id) {
    return view("catalog.edit", array('id'=>$id));
});
*/
// Grupo de rutas con un prefijo
Route::group(['prefix' => 'catalog'], function () {
    Route::get('/', function () { 
        return view("catalog.index");
     });
    Route::get('create', function () { 
        return view("catalog.create");
     });
});

//Route::get('user/{id}', [UserController::class, 'showProfile']);
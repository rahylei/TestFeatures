<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard',  "index")->name('dashboard');
        Route::get('/home', "home")->name('home');
        Route::get('/oferta_academica', "oferta_academica")->name('oferta_academica');
        Route::get('/institucion', "institucion")->name('institucion');
        Route::get('/formacion_integral', "formacion_integral")->name('formacion_integral');
        Route::get('/servicios_universitarios', "servicios_universitarios")->name('servicios_universitarios');
        Route::get('/informacion_publica', "informacion_publica")->name('informacion_publica');
    });
    
});

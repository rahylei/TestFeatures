<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Models\Module;


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

Route::get('/', [SiteController::class, 'home'])->name('home');

if (Schema::hasTable('modules')) {

    if(!blank(Module::all())){
        foreach(Module::all() as $module){
            Route::get('/'.$module->route.'/{module}', [SiteController::class, 'module'])->name($module->route);
        }
    }
}

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/layout', [AdminController::class, 'layout'])->name('admin.layout');

     /*-- implementacion de rutas...*/
     if (Schema::hasTable('modules')) {

        if(!blank(Module::all())){
            foreach(Module::all() as $module){
                Route::get('admin/'.$module->route.'/{module}', [AdminController::class, 'module'])->name( 'admin.'.$module->route );
            }
        }
    }
});

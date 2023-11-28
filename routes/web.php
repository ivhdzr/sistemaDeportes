<?php

use App\Http\Controllers\DeporteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Rutas de acceso */
Route::controller(DeporteController::class) -> group(function(){
    Route::get('deportes', 'index') -> name('deportes.index');
    Route::get('deportes/create', 'create') -> name('deportes.create');
    Route::get('deportes/{deporte}', 'show') -> name('deportes.show');
    Route::post('deportes', 'store') -> name('deportes.store');
    Route::get('deportes/{deporte}/edit', 'edit') -> name('deportes.edit');
    Route::put('deportes/{deporte}','update') -> name('deportes.update');
    Route::delete('deportes/{deporte}', 'destroy') -> name('deportes.destroy');
});

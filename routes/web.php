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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/encuesta-satisfaccion-de-clientes', function () {
    return redirect('/encuestas/satisfacciones/create');
});

Route::get('/encuesta-satisfaccion-de-clientes/{version?}/{codigo?}', function ($version = null, $codigo = null) {
   return redirect('/encuestas/satisfacciones/create?version='.$version.'&codigo='.$codigo);
});

Route::resource('encuestas/satisfacciones', 'App\Http\Controllers\Satisfacciones\SatisfaccionesController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/encuesta-satisfaccion-de-clientes-instituciones', function () {
    return redirect('/encuestas/instituciones/create');
});

Route::get('/encuesta-satisfaccion-de-clientes-instituciones/{version?}/{codigo?}', function ($version = null, $codigo = null) {
   return redirect('/encuestas/instituciones/create?version='.$version.'&codigo='.$codigo);
});

Route::resource('encuestas/instituciones', 'App\Http\Controllers\Instituciones\InstitucionesController');
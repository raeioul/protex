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

Route::get('encuestas/gracias', function () {
    return view('thankyou');
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

Route::get('instituciones/export/', 'App\Http\Controllers\Instituciones\InstitucionesController@export');

Route::get('satisfacciones/export/', 'App\Http\Controllers\Satisfacciones\SatisfaccionesController@export');

Route::get('instituciones/export/{id}', 'App\Http\Controllers\Instituciones\InstitucionesController@oneExport');

Route::get('satisfacciones/export/{id}', 'App\Http\Controllers\Satisfacciones\SatisfaccionesController@oneExport');

Route::get('/exportpdf/{id}', 'App\Http\Controllers\Instituciones\InstitucionesController@exportPdf');

Route::get('satisfacciones/exportpdf/{id}', 'App\Http\Controllers\Satisfacciones\SatisfaccionesController@exportPdf');


Route::resource('admin/operations', 'App\Http\Controllers\Admin\OperationsController');
Route::resource('admin/providers', 'App\Http\Controllers\Admin\ProvidersController');
Route::resource('admin/operation-providers', 'App\Http\Controllers\Admin\OperationProvidersController');
Route::resource('admin/productos', 'App\Http\Controllers\Admin\ProductosController');
Route::resource('admin/precios', 'App\Http\Controllers\Admin\PreciosController');
Route::resource('admin/operacion-productos', 'App\Http\Controllers\Admin\OperacionProductosController');
Route::resource('admin/pagos', 'App\Http\Controllers\Admin\PagosController');
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

//Route::get('/', function () {
//    return view('auth.login');
//});

Route::resource('recepcion', 'App\Http\Controllers\RecepcionController');
Route::resource('cliente', 'App\Http\Controllers\ClienteController');
Route::resource('equipo', 'App\Http\Controllers\EquipoController');
Route::resource('marca', 'App\Http\Controllers\MarcaController');
Route::resource('accesorio', 'App\Http\Controllers\AccesorioController');
Route::resource('equipo_cliente', 'App\Http\Controllers\EquipoCController');



//Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
//    return view('dash.index');
//})->name('dash');

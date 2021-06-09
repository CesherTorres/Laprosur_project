<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\interfazPrincipal;
use App\Http\Controllers\ProduccionCocidosController;
use App\Http\Controllers\ProduccionCrudoController;
use App\Http\Controllers\AvanceQuemaController;
use App\Http\Controllers\SacaLadrilloController;
use App\Http\Controllers\ControlladrilloController;

use App\Models\ProduccionCrudo;
use Illuminate\Support\Facades\Auth;

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

Route::resource('produccionCrudos', ProduccionCrudoController::class);
Route::resource('produccionCocidos', ProduccionCocidosController::class);
Route::resource('Quema', AvanceQuemaController::class);
Route::resource('Saca', SacaLadrilloController::class);
Route::resource('Control', ControlladrilloController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

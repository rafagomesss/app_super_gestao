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
define('MAIN', 'main');

Route::get('/', [\App\Http\Controllers\PrincipalController::class, MAIN]);
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, MAIN]);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, MAIN]);

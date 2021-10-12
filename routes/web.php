<?php

use App\Http\Controllers\TenatController;
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

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/principal', [TenatController::class,'index']);

//Tenant
Route::get('/tenant', 'App\Http\Controllers\TenantController@index');
Route::get('/tenant/create', 'App\Http\Controllers\TenantController@create');

//Empresa
Route::get('/empresa', 'App\Http\Controllers\EmpresaController@index');
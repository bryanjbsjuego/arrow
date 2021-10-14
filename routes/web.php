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

//Tenant empresas
Route::get('/tenant', 'App\Http\Controllers\Tenant\TenantController@index');
Route::get('/tenant/createcompany', 'App\Http\Controllers\Tenant\TenantController@create');
Route::get('/tenant/editcompany', 'App\Http\Controllers\Tenant\TenantController@edit');

//Tenant roles
Route::get('/tenant/listroles', 'App\Http\Controllers\Tenant\TenantController@indexrol');
Route::get('/tenant/createrol', 'App\Http\Controllers\Tenant\TenantController@createrol');
Route::get('/tenant/editrol', 'App\Http\Controllers\Tenant\TenantController@editrol');
Route::get('/tenant/permissirol', 'App\Http\Controllers\Tenant\TenantController@permirol');

//Tenant usuarios admin
Route::get('/tenant/listuseradmin', 'App\Http\Controllers\Tenant\TenantController@indexusers');
Route::get('/tenant/createuseradmin', 'App\Http\Controllers\Tenant\TenantController@createuser');
Route::get('/tenant/edituseradmin', 'App\Http\Controllers\Tenant\TenantController@edituser');


//Empresa
Route::get('/empresa', 'App\Http\Controllers\EmpresaController@index');
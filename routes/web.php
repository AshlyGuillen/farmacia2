<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoControllers;
use App\Http\Controllers\CargoEmpleadoControllers;
use App\Http\Controllers\ProveedoresControllers;
use App\Http\Controllers\ClienteControllers;
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


route::get('/empleado',[EmpleadoControllers::class,'edit']);
route::get('/empleado',[EmpleadoControllers::class,'create']);
route::get('/empleado/idcargo/nomcargo',[EmpleadoControllers::class,'index']);


route::resource('/cargo','App\Http\Controllers\CargoEmpleadoControllers');
Route::resource('/cliente','App\Http\Controllers\ClienteControllers');
Route::resource('/proveedor','App\Http\Controllers\ProveedoresControllers');
Route::resource('/empleado','App\Http\Controllers\EmpleadoControllers');



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

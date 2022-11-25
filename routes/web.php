<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ReporterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PriceController::class, 'index'])->name('app');
Route::post('/', [ClientController::class, 'store'])->name('registerClient');

Route::get('/lugares', [PlaceController::class, 'index'])->name('lugares');
Route::get('/lugares/{id}', [PlaceController::class, 'show'])->name('descripcion');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

/*-------------------------------------------------*/
/*                     Admin                       */
/*-------------------------------------------------*/
Route::get('/home',function(){
    return view('home');
})->middleware('auth')->name('home');

Route::get('login',function(){
    return view('login');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('log');
Route::put('/login', [LoginController::class, 'logout'])->name('logout');

Route::post('Consultas', [ClientController::class, 'sendEmail'])->name('consultas');    

Route::get('/agregar',function(){
    $user = Auth::user();
    return view('agregarLugar')->with(['user'=>$user]);
})->name('agregar')->middleware('auth');


Route::get('/reporte',[ReporterController::class, 'index'])->name('reporte')->middleware('auth');
Route::get('/gestionar',[PlaceController::class, 'gestionar'])->name('gestionar')->middleware('auth');
Route::post('/agregar/guardar',[PlaceController::class, 'store'])->name('guardarLugar')->middleware('auth');
Route::get('/eliminar/{id}',[PlaceController::class,'destroy'])->name('eliminarLugar')->middleware('auth');
Route::get('/actualizar/{id}',[PlaceController::class,'showUpdate'])->name('actualizarLugar')->middleware('auth');
Route::post('/nuevoLugar',[PlaceController::class, 'update'])->name('update')->middleware('auth');

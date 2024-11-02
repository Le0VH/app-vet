<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Logincontroller;
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

Route::resource('usuarios', UsuariosController::class);

Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/actualizarperfil',"secret")->middleware('auth')->name('actualizarperfil');

Route::post('/validar-registro',[Logincontroller::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[Logincontroller::class,'login'])->name('inicia-sesion');
Route::get('/logout',[Logincontroller::class,'logout'])->name('logout');
Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [LoginController::class,'changePassword'])->name('changePassword');
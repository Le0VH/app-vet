<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Logincontroller;
//use App\Http\Controllers\ArchivosAdjuntoController;
//use App\Http\Controllers\CitaController;
//use App\Http\Controllers\HistorialDesparacitacioneController;



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

Route::view('/Iniciar_Sesion',"login")->name('Iniciar_Sesion');
Route::view('/registro',"register")->name('registro');
Route::view('/actualizarperfil',"secret")->middleware('auth')->name('actualizarperfil');

Route::post('/validar-registro',[Logincontroller::class,'register'])->name('validar-registro');
Route::post('/inicia-sesion',[Logincontroller::class,'login'])->name('inicia-sesion');
Route::get('/logout',[Logincontroller::class,'logout'])->name('logout');
Route::get('/NewPassword',  [UserSettingsController::class,'NewPassword'])->name('NewPassword')->middleware('auth');
Route::post('/change/password',  [LoginController::class,'changePassword'])->name('changePassword');
Auth::routes();

Route::resource('archivos-adjuntos', App\Http\Controllers\ArchivosAdjuntoController::class);
Route::resource('citas', App\Http\Controllers\CitaController::class);
Route::resource('historial-desparacitaciones', App\Http\Controllers\HistorialDesparacitacioneController::class);
Route::resource('historial-medicos', App\Http\Controllers\HistorialMedicoController::class);
Route::resource('inventario-insumos', App\Http\Controllers\InventarioInsumoController::class);
Route::resource('mascotas', App\Http\Controllers\MascotaController::class);
Route::resource('notificaciones', App\Http\Controllers\NotificacioneController::class);
Route::resource('plantilla-notificacions', App\Http\Controllers\PlantillaNotificacionController::class);
Route::resource('registro-movimiento-inventarios', App\Http\Controllers\RegistroMovimientoInventarioController::class);
Route::resource('seguimientos', App\Http\Controllers\SeguimientoController::class);
Route::resource('tratamientos', App\Http\Controllers\TratamientoController::class);
Route::resource('vacunas', App\Http\Controllers\VacunaController::class);
Route::resource('veterinarios', App\Http\Controllers\VeterinarioController::class);
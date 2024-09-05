<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutasController;
use App\Http\Controllers\ValidarUsuario;

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
    return view('index');
})->name('inicio');

//Ruta para validar usuario
Route::post('validando',[ValidarUsuario::class,'validarUsario'])->name('validar');

//Ruta para calcular la suma de 2 numeros
Route::post('sumar-numeros',[RutasController::class,'SumarNumeros'])->name('sumar');

//Ruta para mostrar tabla de datos con imagenes
Route::get('pagina2',[RutasController::class,'mostrarpagina2'])->name('pag2');

//ruta para visualizar pagina de suma de numeros
Route::get('Suma-Numeros',[RutasController::class,'SumaNumero'])->name('suma');

Route::get('Resta',[RutasController::class,'mostraResta'])->name('resta');

Route::post('Restar-Numeros',[RutasController::class,'restarN'])->name('restarnumeros');
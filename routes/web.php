<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('contactos')->group(function(){
    Route::get('obtener-todo', [ContactoController::class, 'getAll']);
    Route::get('obtener/{id}', [ContactoController::class, 'getById']);
    Route::post('crear', [ContactoController::class, 'create']);
    Route::put('actualizar/{id}', [ContactoController::class, 'update']);
    Route::delete('eliminar/{id}', [ContactoController::class, 'delete']);
});
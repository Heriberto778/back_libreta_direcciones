<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('contactos')->group(function()    {
    Route::get('obtener-todo', [ContactoController::class, 'getAll']);
    Route::get('obtener/{id}', [ContactoController::class, 'getById']);
    Route::post('crear', [ContactoController::class, 'create']);
    Route::put('actualizar/{id}', [ContactoController::class, 'update']);
    Route::delete('eliminar/{id}', [ContactoController::class, 'delete']);
});

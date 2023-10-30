<?php

use App\Http\Controllers\controladorAlquiler;
use App\Http\Controllers\controladorCoche;
use App\Http\Controllers\controladorPersona;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user()
// });

Route::get('usuarios/{dni}', [controladorPersona::class,'seleccionarUsuarioDNI']);
Route::get('usuarios', [controladorPersona::class,'seleccionarUsuarios']);
Route::post('usuarios', [controladorPersona::class, 'crearUsuario']);
Route::put('usuarios/{dni}', [controladorPersona::class, 'modificarUsuario']);
Route::delete('usuarios/{dni}', [controladorPersona::class, 'borrarUsuario']);

Route::get('coches/{matricula}', [controladorCoche::class, 'seleccionarCocheMatricula']);
Route::get('coches', [controladorCoche::class, 'seleccionarCoches']);
Route::delete('coches/{matricula}',[controladorCoche::class, 'borrarCoche']);
Route::put('coche/{matricula}', [controladorCoche::class, 'modificarCoche']);
Route::post('coches',[controladorCoche::class, 'insertarCoche']);
Route::put('coches/modificar_precio/{matricula}', [controladorCoche::class, 'modificarPrecio']);

Route::post('alquileres/solicitar/{dni}', [controladorAlquiler::class, 'comprobacionAlquiler']);
Route::put('alquileres/devolucion', [controladorAlquiler::class, 'devolucionAlquiler']);
Route::get('alquileres/ranking', [controladorAlquiler::class,'rankingAlquileres']);

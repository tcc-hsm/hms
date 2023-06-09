<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\QuartosController;



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
    return view('index');
});

Route::get('/postman', function () {
    return view('erro/postman');
});

Route::post('/autenticacao', [UsuariosController::class, 'autenticacao']);

Route::post('/home', [UsuariosController::class, 'home']);

Route::get('/home', [UsuariosController::class, 'home']);


#region Cadastro de Usuario
Route::get('/cadastro_usuario', [UsuariosController::class, 'cadastro_usuario_get']);

Route::post('/cadastro_usuario', [UsuariosController::class, 'cadastro_usuario']);

#endregion

#region Quarto
Route::get('/quarto/cadastro_quarto', [QuartosController::class, 'cadastro_quarto_get']);

Route::post('/quarto/cadastro_quarto', [QuartosController::class, 'create']);


Route::get('/quarto', [QuartosController::class, 'quarto']);

#endregion





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

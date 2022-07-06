<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']); //Chama a página inicial

Route::get('/cadastro', [ClienteController::class, 'create']); // Cria o formulário de cadastro
Route::post('/cadastro', [ClienteController::class, 'store'])->name('salvar_cliente'); // Armazena os dados no banco

Route::get('/listar', [ClienteController::class, 'index']); // Lista todos os usuários cadastrados

Route::post('/cliente/deletar/{cli_id}', [ClienteController::class, 'destroy'])->name('deletar_cliente'); // Destroi um usuário do banco

Route::view('/logradouro/cadastro','log-register' )->name('logregister'); // Carrega tela de cadastro de logradouro


<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\User\ManutencaoController@prediction', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('veiculo/listar', 'App\Http\Controllers\User\VeiculoController@list')->name("listagem-veiculo");
Route::get('veiculo/visualizar/{id}', 'App\Http\Controllers\User\VeiculoController@view')->name("visualizar-veiculo");
Route::get('veiculo/vis-editar/{id}', 'App\Http\Controllers\User\VeiculoController@edit')->name("vis-editar-veiculo");
Route::post('veiculo/atualizar/{id}', 'App\Http\Controllers\User\VeiculoController@update')->name("editar-veiculo");
Route::get('veiculo/cadastrar', 'App\Http\Controllers\User\VeiculoController@viewRegister')->name("vis-cadastro-veiculo");
Route::post('veiculo/cadastrar/novo', 'App\Http\Controllers\User\VeiculoController@registerVeiculo')->name("cadastrar-veiculo");
Route::post('veiculo/deletar', 'App\Http\Controllers\User\VeiculoController@delete')->name("deletar-veiculo");

Route::get('manutencao/listar', 'App\Http\Controllers\User\ManutencaoController@list')->name("listagem-manutencao");
Route::get('manutencao/visualizar/{id}', 'App\Http\Controllers\User\ManutencaoController@view')->name("visualizar-manutencao");
Route::get('manutencao/vis-editar/{id}', 'App\Http\Controllers\User\ManutencaoController@edit')->name("vis-editar-manutencao");
Route::post('manutencao/atualizar/{id}', 'App\Http\Controllers\User\ManutencaoController@update')->name("editar-manutencao");
Route::get('manutencao/cadastrar', 'App\Http\Controllers\User\ManutencaoController@viewRegister')->name("vis-cadastro-manutencao");
Route::post('manutencao/cadastrar/novo', 'App\Http\Controllers\User\ManutencaoController@registerManutencao')->name("cadastrar-manutencao");
Route::post('manutencao/deletar', 'App\Http\Controllers\User\ManutencaoController@delete')->name("deletar-manutencao");


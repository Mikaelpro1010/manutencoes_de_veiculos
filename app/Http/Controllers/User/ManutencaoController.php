<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Manutencao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManutencaoController extends Controller
{
    //função responsável por buscar os dados no banco de dados e retorná-los para a view de listagem de manutenções
    public function list()
    {
        $manutencoes = Manutencao::get();

        return view('manutencoes.list-manutencoes', ['manutencoes' => $manutencoes] );
    }

    public function prediction()
    {
        $manutencoes = Manutencao::get();

        return view('dashboard', ['manutencoes' => $manutencoes] );
    }

    //função responsável por retornar a view de cadastro de manutenções
    public function viewRegister()
    {
        return view('manutencoes.view-register-manutencao');
    }

    //função responsável por cadastrar os dados informados pelo usário e armazenar os mesmos no banco de dados
    public function registerManutencao(Request $request)
    {

        $manutencao = new Manutencao();

        $manutencao->manutencao = $request->manutencao;
        $manutencao->dia_da_manutencao = $request->dia_da_manutencao;
        $manutencao->marca = $request->marca;
        $manutencao->modelo = $request->modelo;
        $manutencao->versao = $request->versao;

        $manutencao->save();

        return redirect()->route('listagem-manutencao')->with('mensagem', 'Manutenação cadastrada com sucesso!');
    }

    //função responsável por retornar a view dos dados que o usuário deseja visualizar
    public function view($id)
    {
        $manutencoes = Manutencao::find($id);

        return view('manutencoes.view-manutencao', ['manutencoes' => $manutencoes] );
    }

    //função responsável por retornar a view dos dados que o usuário deseja editar
    public function edit($id){
        $manutencoes = Manutencao::find($id);

        return view('manutencoes.edit-manutencao', ['manutencoes' => $manutencoes] );
    }

    //função responsável por salvar os novos dados após serem editados
    public function update(Request $request, $id)
    {
        $manutencao = Manutencao::find($id);

        $manutencao->manutencao = $request->manutencao;
        $manutencao->dia_da_manutencao = $request->dia_da_manutencao;
        $manutencao->marca = $request->marca;
        $manutencao->modelo = $request->modelo;
        $manutencao->versao = $request->versao;
        $manutencao->save();

        return redirect()->route('listagem-manutencao', $manutencao->id)->with('mensagem', 'Atualizado com sucesso!');
    }

    public function delete(Request $request)
    {
        $manutencoes = Manutencao::find($request->id);
        $manutencoes->delete();

        return redirect()->route('listagem-manutencao')->with('mensagem', 'Deletado com sucesso!');
    }
}

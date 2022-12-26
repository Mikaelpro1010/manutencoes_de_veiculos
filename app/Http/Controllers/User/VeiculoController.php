<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VeiculoController extends Controller
{
    //função responsável por buscar os dados no banco de dados e retorná-los para a view de listagem de veículos
    public function list()
    {
        $veiculos = Veiculo::get();

        return view('veiculos.list-veiculos', ['veiculos' => $veiculos] );
    }

    //função responsável por retornar a view de cadastro de veículos
    public function viewRegister()
    {
        return view('veiculos.view-register-veiculo');
    }

    //função responsável por cadastrar os dados informados pelo usário e armazenar os mesmos no banco de dados
    public function registerVeiculo(Request $request)
    {
        $validator = Validator::make(
            $request->only(['cpf', 'placa_do_veiculo', 'telefone']),
            [
                'cpf' => 'required|string|max:255',
                'placa_do_veiculo' => 'nullable|string',
                'telefone' => 'nullable|string',
            ],
            [
                'cpf.required' => 'É necessário inserir a manutenção!',
                'placa_do_veiculo.required' => 'É necessário inserir a placa do veículo!',
                'telefone.required' => 'É necessário inserir seu número de telefone!',
                'max' => 'Quantidade de caracteres ultrapassada, o nome deve ter menos que 254 caracteres!',
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $veiculo = new Veiculo();

        $veiculo->veiculo = $request->cpf;
        $veiculo->placa_do_veiculo = $request->placa_do_veiculo;
        $veiculo->telefone = $request->telefone;

        $veiculo->save();

        return redirect()->route('listagem-veiculo')->with('mensagem', 'Veículo cadastrado com sucesso!');
    }

    //função responsável por retornar a view dos dados que o usuário deseja visualizar
    public function view($id)
    {
        $veiculos = Veiculo::find($id);

        return view('veiculos.view-veiculo', ['veiculos' => $veiculos] );
    }

    //função responsável por retornar a view dos dados que o usuário deseja editar
    public function edit($id){
        $veiculos = Veiculo::find($id);

        return view('veiculos.edit-veiculo', ['veiculos' => $veiculos] );
    }

    //função responsável por salvar os novos dados após serem editados
    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::find($id);

        $veiculo->veiculo = $request->veiculo;
        $veiculo->placa_do_veiculo = $request->placa_do_veiculo;
        $veiculo->telefone = $request->telefone;
        $veiculo->save();

        return redirect()->route('listagem-veiculo', $veiculo->id)->with('mensagem', 'Atualizado com sucesso!');
    }

    public function delete(Request $request)
    {
        $veiculos = Veiculo::find($request->id);
        $veiculos->delete();

        return redirect()->route('listagem-veiculo')->with('mensagem', 'Deletado com sucesso!');
    }

}

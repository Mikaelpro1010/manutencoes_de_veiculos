@extends('template.layout')

@section('conteudo')
<div class="container"> 
    <div class="card mt-3">
        <div class="card-header">
            <h3>
                Editar Manutenção
            </h3>
        </div>
        <div class="card-body shadow">
            <form class="" action="{{ route('editar-manutencao', $manutencoes->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="row align-items-start">
                    <div class="col">
                        <label for="nome" class="fw-bold form-label mb-1 mt-3">Campo para editar a manutenção:</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{$manutencoes->manutencao}}">
                    </div>

                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar a marca:</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{$manutencoes->marca}}">
                    </div>

                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar o modelo:</label>
                        <input type="text" name="placa_do_veiculo" id="placa_do_veiculo" class="form-control" value="{{$manutencoes->modelo}}">
                    </div>

                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar a versão:</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="{{$manutencoes->versao}}">
                    </div>
                </div>
                <div>
                    <button class="btn btn-info mt-4" type="submit">Salvar edição</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
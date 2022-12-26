@extends('template.layout')

@section('conteudo')
<div class="container">
    <div class="card mt-3">
        <div class="card-header">
            <h3>
                Editar Veículo
            </h3>
        </div>
        <div class="card-body shadow">
            <form class="" action="{{ route('editar-veiculo', $veiculos->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="row align-items-start">
                    <div class="col">
                        <label for="nome" class="fw-bold form-label mb-1 mt-3">Campo para editar o nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="{{$veiculos->nome}}">
                    </div>

                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar o CPF:</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" value="{{$veiculos->cpf}}">
                    </div>

                </div>
                <div class="row align-items-start">
                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar a placa do veículo:</label>
                        <input type="text" name="placa_do_veiculo" id="placa_do_veiculo" class="form-control" value="{{$veiculos->placa_do_veiculo}}">
                    </div>

                    <div class="col">
                        <label for="descricao" class="fw-bold form-label mb-1 mt-3">Campo para editar o telefone:</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" value="{{$veiculos->telefone}}">
                    </div>
                </div>
            </form>
            <div>
                <button class="btn btn-info mt-4" type="submit">Salvar edição</button>
            </div>
        </div>
    </div>
</div>
@endsection

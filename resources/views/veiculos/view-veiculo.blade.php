@extends('template.layout')

@section('conteudo')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h3>
                    Visualizar Manutenção
                </h3>
            </div>
            <div class="card-body shadow">
                <div class="row align-items-start">
                    <div class="col">
                        <label for="" class="fw-bolder">Nome:</label>
                        <p>{{ $veiculos->nome }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">CPF:</label>
                        <p>{{ $veiculos->cpf }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">Placa do veículo:</label>
                        <p>{{ $veiculos->placa_do_veiculo }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">Telefone:</label>
                        <p>{{ $veiculos->telefone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
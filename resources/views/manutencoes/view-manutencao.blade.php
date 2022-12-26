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
                        <label for="" class="fw-bolder">Manutencação:</label>
                        <p>{{ $manutencoes->manutencao }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">Marca:</label>
                        <p>{{ $manutencoes->marca }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">Modelo:</label>
                        <p>{{ $manutencoes->modelo }}</p>
                    </div>
                    <div class="col">
                        <label for="" class="fw-bolder">Versão:</label>
                        <p>{{ $manutencoes->versao }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('template.layout')

@section('conteudo')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h2>
                    Cadastrar Veículo
                </h2>
            </div>
            <div class="card-body p-4 shadow">
                <form class="row" action="{{ route('cadastrar-veiculo') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="row align-items-start col-12">
                            <div class="col-4">
                                <label for="cpf" class="form-label mb-1 mt-3">Informe seu CPF:</label>
                                <input type="text" name="cpf" id="cpf" class="form-control">
                
                            </div>

                            <div class="col-4">
                                <label for="placa_do_veiculo" class="form-label mb-1 mt-3">Informe a placa do seu veículo:</label>
                                <input type="text" name="placa_do_veiculo" id="placa_do_veiculo" class="form-control">
                            </div>

                            <div class="col-4">
                                <label for="telefone" class="form-label mb-1 mt-3">Insira seu telefone para contato:</label>
                                <input type="text" name="telefone" id="telefone" class="form-control">
                            </div>
                        </div>
                        
                        <div class="mx-3">
                            <button class="btn btn-info mt-4" type="submit">Salvar cadastro</button>
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>
@endsection
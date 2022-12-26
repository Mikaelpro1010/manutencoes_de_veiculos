@extends('template.layout')

@section('conteudo')
    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
                <h2>
                    Cadastrar Manutenção
                </h2>
            </div>
            <div class="card-body p-4 shadow">
                <form class="row" action="{{ route('cadastrar-manutencao') }}" method="POST">
                    {{ csrf_field() }}
                        <div class="row align-items-start col-12">
                            <div class="col-6">
                                <label for="manutencao" class="form-label mb-1 mt-3">Descreva a manutenção nescessária:</label>
                                <textarea class="form-control" name="manutencao" id="manutencao" rows="5"></textarea>
                            </div>
                            
                            <div class="col-6">
                                <label for="dia_da_manutencao" class="form-label mb-1 mt-3">Informe o dia da manutenção:</label>
                                <input type="text" name="dia_da_manutencao" id="dia_da_manutencao" class="form-control">
                                
                            </div>
                        </div>
                        
                        <div class="row align-items-start col-12">
                            <div class="col-6">
                                <label for="marca" class="form-label mb-1 mt-3">Informe a marca do veículo:</label>
                                <input type="text" name="marca" id="marca" class="form-control">
                
                            </div>
                            <div class="col-6">
                                <label for="modelo" class="form-label mb-1 mt-3">Informe o modelo do veículo:</label>
                                <input type="text" name="modelo" id="modelo" class="form-control">
                            </div>
        
                            <div class="col-6">
                                <label for="versao" class="form-label mb-1 mt-3">Informe a versão do veículo:</label>
                                <input type="text" name="versao" id="versao" class="form-control">
                            </div>
                        </div>
                        
                        <div>
                            <button class="btn btn-info mt-4" type="submit">Salvar cadastro</button>
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>
@endsection
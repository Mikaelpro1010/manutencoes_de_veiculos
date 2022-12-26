@extends('template.layout')

@section('conteudo')
<div class="container">
    @if (session('mensagem'))
            <div class="alert alert-success" role="alert">
                {{ session('mensagem') }}
            </div>
    @endif
    <div class="mt-3 card-header border col-lg-12 d-flex justify-content-between align-itens-center">
        <h2>Tabela de Manutenções<h2>
        <a href="{{ route('vis-cadastro-manutencao') }}" class="btn btn-success">Cadastrar</a>
    </div>
    <table class="table table-striped mt-3 shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Manutenção</th>
                <th>Dia</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Versão</th>
                <th>Data</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody class="border">
            @foreach($manutencoes as $manutencao)
            <tr>
                <td>{{ $manutencao->id }}</td>
                <td>{{ substr($manutencao->manutencao, 0, 20) . '...' }}</td>
                <td>{{ $manutencao->dia_da_manutencao }}</td>
                <td>{{ $manutencao->marca }}</td>
                <td>{{ $manutencao->modelo }}</td>
                <td>{{ $manutencao->versao }}</td>
                <td>{{ $manutencao->created_at }}</td>
                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('visualizar-manutencao', ['id' => $manutencao->id]) }}" role="button"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a class="btn btn-warning" href="{{ route('vis-editar-manutencao', ['id' => $manutencao->id]) }}" role="button"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="javascript:deletar({{ $manutencao->id }})">
                        <i class="fa-xl fa-solid fa-trash text-danger"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div id="myModal1" name="id" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deletar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="" action="{{ route('deletar-manutencao') }}" method="POST">
                        <p>Tem certeza que deseja excluir esses dados?</p>
                        {{ csrf_field() }}
                        <input type="hidden" id="deletar" name="id" value="">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success" onclick="close_modal()">Deletar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

    function deletar(id) {
        $('#deletar').val(id);
        $('#myModal1').modal('show');
    }


    function close_modal() {
        $('#myModal1').modal('hide');
    }
</script>

@endsection


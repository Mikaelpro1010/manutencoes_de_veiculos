@extends('template.layout')
@section('conteudo')
<div class="container">
    @if (session('mensagem'))
    <div class="alert alert-success" role="alert">
        {{ session('mensagem') }}
    </div>
    @endif
    <div class="mt-3 card-header border col-lg-12 d-flex justify-content-between align-itens-center">
        <h2>Manutenções do veículo nos próximos 7 dias <h2>
    </div>
    <table class="table table-striped mt-3 shadow">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Manutenção</th>
                <th>Dia</th>
            </tr>
        </thead>
        <tbody class="border">
            @foreach($manutencoes as $manutencao)
            <tr>
                <td>{{ $manutencao->id }}</td>
                <td>{{ substr($manutencao->manutencao, 0, 20) . '...' }}</td>
                <td>{{ $manutencao->dia_da_manutencao }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
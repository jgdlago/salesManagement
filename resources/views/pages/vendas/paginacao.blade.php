{{-- Extende a index --}}
@extends('index')

{{-- Aloca na @yield('content') --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        <form action="{{ route('venda.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button>Pesquisar</button>
            <a type="button" href="{{ route('cadastrar.venda') }}" class="btn btn-success float-end">
                Cadastrar venda
            </a>
        </form>

    <h2>Section title</h2>
    <div class="table-responsive mt-4">
        @if ($findVenda->isEmpty())
            <p> Não existem produtos </p>
        @else
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>Numeração</th>
            <th>Produto</th>
            <th>Cliente</th>
            <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($findVenda as $venda)
                <tr>
                    <td>{{ $venda->numero_da_venda }}</td>
                    <td>{{ $venda->produto->nome }}</td>
                    <td>{{ $venda->cliente->nome }}</td>
                    <td>
                        <a href="{{ route('enviaComprovantePorEmail.venda', $venda->id) }}"
                            class="btn btn-light btn-sm">
                            Enviar Email
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        @endif
    </div>

    </div>
@endsection
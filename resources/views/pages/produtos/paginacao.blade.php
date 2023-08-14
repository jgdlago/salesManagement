{{-- Extende a index --}}
@extends('index')

{{-- Aloca na @yield('content') --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="{{ route('produto.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button>Pesquisar</button>
            <a type="button" href="{{ route('cadastrar.produto') }}" class="btn btn-success float-end">
                Incluir produto
            </a>
        </form>

    <h2>Section title</h2>
    <div class="table-responsive mt-4">
        @if ($findProduto->isEmpty())
            <p> Não existem produtos </p>
        @else
        <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Valor</th>
            <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($findProduto as $produto)
                <tr>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('atualizar.produto', $produto->id) }}" class="btn btn-light">
                            Editar
                        </a>
                        <meta name='csrf-token' content=" {{ csrf_token() }}" />
                        <a onclick="deleteRegistroPaginacao( '{{ route('produto.delete') }} ', {{ $produto->id }}  )"
                            class="btn btn-danger">
                            Excluir
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
{{-- Extende a index --}}
@extends('index')

{{-- Aloca na @yield('content') --}}
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        <form action="" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome" />
            <button>Pesquisar</button>
            <a type="button" href="" class="btn btn-success float-end">
                Incluir produto
            </a>
        </form>
    </div>
@endsection
<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Models\Cliente;
use App\Models\Componentes;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function index (Request $request) {

        $pesquisar = $request->pesquisar;
        $findCliente = $this->cliente->getClientesPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.clientes.paginacao', compact('findCliente'));
    }

    public function delete(Request $request) {
        
        $id = $request->id;
        $buscarRegistro = Cliente::find($id);
        $buscarRegistro->delete();

        return response()->json(['success' => true]);
    }

    public function cadastrarCliente(FormRequestClientes $request) {
        if ($request->method() == "POST") {
            $data = $request->all();
            Cliente::create($data);

            Toastr::success('Salvo!');
            return redirect()->route('cliente.index');
        } 

        return view('pages.clientes.create');
    }

    public function atualizarCliente(Request $request, $id) {
        if ($request->method() == "PUT") {
            $data = $request->all();

            $buscaRegistro = Cliente::find($id);
            $buscaRegistro->update($data);

            return redirect()->route('cliente.index');
        } 

        $findCliente = Cliente::where('id', '=', $id)->first();
        return view('pages.clientes.atualiza', compact('findCliente'));
    }
}

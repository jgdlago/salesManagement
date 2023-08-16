<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller {

    public function index() {

        $totalDeProdutoCadastrado = Produto::all()->count();
        $totalDeClienteCadastrado = Cliente::all()->count();
        $totalDeVendaCadastrado = Venda::all()->count();
        $totalDeUsuarioCadastrado = User::all()->count();

        return view('pages.dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClienteCadastrado', 'totalDeVendaCadastrado', 'totalDeUsuarioCadastrado'));
    }

}

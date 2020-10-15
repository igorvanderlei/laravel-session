<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Venda;

class ListarVendasController extends Controller
{
    public function listar() {
        $this->authorize('list', Venda::class);
        return "lista de vendas";

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaProdutoController extends Controller
{
    public function exibir($produto) {
        $produto = \App\Models\Produto::find($produto);
        return view('produto')->with(['produto' =>$produto]);

    }
}

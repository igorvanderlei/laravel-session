<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaCategoriaController extends Controller
{
 public function listar($categoria = null) {
        $categorias = \App\Models\Categoria::where('categoria_id', '=', $categoria)->get();
        $produtos = array();
        if($categoria != null) {
               $produtos = \App\Models\Produto::where('categoria_id', '=', $categoria)->get();
               $categoria = \App\Models\Categoria::find($categoria);
        }

//        dd($categoria->categoriaPai);
 
        return view('lista')->with(['categorias' => $categorias,
                                    'categoria' => $categoria,
                                    'produtos' => $produtos
                                    ]
                                    );
    }
}

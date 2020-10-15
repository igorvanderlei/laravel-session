<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function adicionar (Request $request) {
        if($request->session()->has('itens')) {
            $carrinho = $request->session()->get('itens');
        } else {
            $carrinho = array();
        }
        $id = $request->produto_id;

        if(array_key_exists($id, $carrinho)) {
            $carrinho[$id]['quantidade'] += $request->quantidade;
        } else {
            $dados = array();
            $dados['quantidade'] = $request->quantidade;
            $produto = \App\Models\Produto::find($id);
            $dados['preco'] = $produto->preco;
            $dados['produto'] = $produto->nome;
            $dados['subtotal'] = $produto->preco * $request->quantidade;

            $carrinho[$id] = $dados;
        }

        $request->session()->put('itens', $carrinho);

        return redirect("/carrinho");

    }

    public function remover (Request $request, $produto_id) {
        if($request->session()->has('itens')) {
            $carrinho = $request->session()->get('itens');
        }

         if(array_key_exists($produto_id, $carrinho)) {
            unset($carrinho[$produto_id]);
         }
        $request->session()->put('itens', $carrinho);

        return redirect("/carrinho");

    }

    public function show(Request $request) {
        if(!$request->session()->has('itens')) {
            $carrinho = array();
            $request->session()->put('itens', $carrinho);
        }
        return view('carrinho');
    }

    public function finalizar(Request $request) {
        if($request->session()->has('itens')) {
            $cliente = \App\Models\Cliente::
                where('user_id', '=', \Auth::user()->id)
                ->first();

            $carrinho = $request->session()->get('itens');
            $itens = array();
            $total = 0;
            foreach($carrinho as $k => $dados) {
                $itens[] = \App\Models\ItemCompra::make([
                    'produto_id' => $k,
                    'quantidade' => $dados['quantidade'],
                    'preco' =>$dados['preco']
                ]);
                $total += $dados['subtotal'];
            }
            $compra = \App\Models\Compra::create([
                'cliente_id' => $cliente->id,
                'total' => $total
            ]);
            $compra->itemCompras()->saveMany($itens);

            $carrinho = array();
            $request->session()->put('itens', $carrinho);
            return "compra realizada com sucesso";

        } else {
            return "Erro: carrinho vazio";
        }
    }
}

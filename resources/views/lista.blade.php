@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@if(isset($categoria)) {{$categoria->nome}} <a href="{{ route('lista', ['categoria' => $categoria->categoriaPai] )}}"> Voltar</a> @else Loja (Raiz) @endif</div>

                <div class="card-body">
                    <h1>Categorias</h1>
                    <ul>
                    @foreach ($categorias as $cat)
                        <li><a href="{{ route('lista', ['categoria' => $cat]) }}" >{{ $cat->nome }}</a>
                    @endforeach
                    </ul>

                    <h2>Produtos</h2>
                    <ul>
                    @foreach ($produtos as $prod)
                        <li><a href="{{ route('produto', ['produto' => $prod] ) }}" >{{ $prod->nome }}</a>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

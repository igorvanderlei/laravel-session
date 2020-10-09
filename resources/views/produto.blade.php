@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{ route('lista', ['categoria' => $produto->categoria] )}}">{{ $produto->categoria->nome }}</a></div>

                <div class="card-body">
                    <h1>Detalhes do Produto</h1>
                    <h2> {{ $produto->nome }} </h2>
                    <h2> Preço: R$ {{ $produto->preco }} </h2>

                    <form action="{{ route('adicionar') }}" method="post" >     @csrf
                    <input type="hidden" name="produto_id" value="{{ $produto->id }}" />
                    Quantidade: <input type="number" name="quantidade" min='1' max='10' value='1' />
                    <input type="submit" value="Add" />

                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

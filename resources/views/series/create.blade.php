@extends('layout')

@section('cabecalho')
Cadastrar Nova Séries
@endsection

@section('conteudo')
<from method="post">
    <div class="form-group">
        <label for="nome">Nome </label>
        <input type="text" class="form-control" name="nome" id="nome">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</from>
@endsection
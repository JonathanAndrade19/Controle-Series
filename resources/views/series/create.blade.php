@extends('layout')

@section('cabecalho')
    Cadastrar Nova Séries
@endsection

@section('conteudo')
    <from method="post">
        @csrf
        <div class="form-group">
            <label for="nome" style="margin-bottom: 1rem">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn btn-primary" style="margin-top: 1rem">Adicionar</button>
    </from>
@endsection
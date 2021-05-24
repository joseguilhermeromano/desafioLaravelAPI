@extends('templates.master')

@section('titulo', 'Produtos')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12">
            <br>
            <h5 class="estilo-subtitulo text-left">Produtos</h5>
            <hr>
            <br>
            <div class="row">
                <div class="col-sm-2">
                    <a href="{{ URL::to('/') }}/produtos/cadastrar" class="btn btn-default"><b><span class="fa fa-plus"></span> Cadastrar</b></a>
                </div>
            </div>
            <br><br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Vendedor</th>
                    <th scope="col">Preço</th>
                    <th scope="col" class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($produtos as $produto)
                    <tr>
                        <th scope="row">{{$produto->id}}</th>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->vendedor->nome}}</td>
                        <td>{{$produto->preco}}</td>
                        <td width="200">
                            <div class="row">
                                <a href="{{ URL::to('/') }}/produtos/alterar/{{$produto->id}}" class="btn btn-success"><b><span class="fa fa-edit"></span> Alterar</b></a>
                                <a href="{{ URL::to('/') }}/produtos/excluir/{{$produto->id}}" class="btn btn-danger"><b><span class="fa fa-edit"></span> Excluir</b></a>
                            </div>
                        </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

@stop
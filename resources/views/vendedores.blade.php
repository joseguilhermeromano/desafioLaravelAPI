@extends('templates.master')

@section('titulo', 'Vendedores')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12">
            <br>
            <h5 class="estilo-subtitulo text-left">Vendedores</h5>
            <hr>
            <br>
            <div class="row">
              <div class="col-sm-2">
                  <a href="{{ URL::to('/') }}/vendedores/cadastrar" class="btn btn-default"><b><span class="fa fa-plus"></span> Cadastrar</b></a>
              </div>
            </div>
            <br><br>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col" class="text-center">Ações</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($vendedores as $vendedor)
                    <tr>
                      <th scope="row">{{$vendedor->id}}</th>
                      <td>{{$vendedor->nome}}</td>
                      <td>{{$vendedor->cpf}}</td>
                      <td width="200">
                          <div class="row">
                              <a href="{{ URL::to('/') }}/vendedores/alterar/{{$vendedor->id}}" class="btn btn-success"><b><span class="fa fa-edit"></span> Alterar</b></a>
                              <a href="{{ URL::to('/') }}/vendedores/excluir/{{$vendedor->id}}" class="btn btn-danger"><b><span class="fa fa-edit"></span> Excluir</b></a>
                          </div>
                      </td>
                    </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

@stop
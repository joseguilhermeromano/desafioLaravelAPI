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
              <div class="col-sm-4">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Procurar por...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><b><span class="fa fa-search"></span>&nbsp;&nbsp;Buscar</b></button>
                    </span>
                  </div><!-- /input-group -->
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
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td width="200">
                        <div class="row">
                            <a href="#" class="btn btn-success"><b><span class="fa fa-edit"></span> Alterar</b></a>
                            <a href="#" class="btn btn-danger"><b><span class="fa fa-edit"></span> Excluir</b></a>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>

@stop
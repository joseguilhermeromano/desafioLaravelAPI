@extends('templates.master')

@section('titulo', 'Cadastrar Vendedor')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12">
            <br>
            <h5 class="estilo-subtitulo text-left">Cadastrar Vendedor</h5>
            <hr>
            <br>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 text-center">
                        <div class="form-group">
                            <input type="submit" value="Salvar" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@stop
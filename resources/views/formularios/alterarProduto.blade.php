@extends('templates.master')

@section('titulo', 'Alterar Produto')

@section('conteudo')

    <div class="row">
        <div class="col-sm-12">
            <br>
            <h5 class="estilo-subtitulo text-left">Alterar Produto</h5>
            <hr>
            <br>
            <form method="POST">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="{{$produto->nome}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" name="preco" class="form-control masked-currency" id="preco" value="{{$produto->preco}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="vendedor">Vendedor Selecionado</label>
                            <input type="text" value="{{$produto->vendedor->nome}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="vendedor">Vendedor</label>
                            <select name="vendedor_id" class="form-control" id="vendedor">
                                <option selected disabled>Selecione um vendedor</option>
                                @foreach ($vendedores as $vendedor)
                                    <option value="{{$vendedor->id}}">{{$vendedor->nome}}</option>
                                @endforeach
                            </select>
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

    <script src="{{ asset('js/masked-currency.js') }}"></script>

@stop
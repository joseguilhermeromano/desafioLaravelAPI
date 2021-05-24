<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Vendedor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('vendedor')->get();
        return response()->json($produtos);
    }

    public function store(Request $request)
    {
       $produto = new Produto();
       $produto->fill($request->all());
       $produto->save();

        return response()->json($produto, 201);
    }

    public function show($id)
    {
        $produto = Produto::with('vendedor')->find($id);

        if(!$produto) {
            return response()->json([
                'message'   => 'Produto não encontrado.',
            ], 404);
        }

        return response()->json($produto);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json([
                'message' => 'Produto não encontrado',
            ], 404);
        }

        $produto->fill($request->all());
        $produto->save();

        return response()->json($produto);
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);

        if(!$produto) {
            return response()->json([
                'message'   => 'Produto não encontrado.',
            ], 404);
        }

        $produto->delete();
    }

    public function list(){
        $produtos = Produto::with('vendedor')->get();
        return view('produtos', ['produtos' => $produtos]);
    }

    public function insert(Request $request){

        if (empty($request->all())) {
            $vendedores = Vendedor::all();
            return view('formularios.inserirProduto', ['vendedores' => $vendedores]);
        }

        $produto = new Produto();
        $produto->fill($request->all());
        $preco = preg_replace('#[^0-9\,]#', '', $produto->preco);
        $produto->preco = str_replace(',', '.', $preco);
        $produto->save();

        return redirect()->action('ProdutosController@list');
    }

    public function edit(Request $request, $id){

        $produto = Produto::find($id);
        $produto->preco = number_format($produto->preco, 2, ',', '.');

        if (empty($request->all())) {
            $vendedores = Vendedor::all();
            return view('formularios.alterarProduto', ['produto' => $produto,'vendedores' => $vendedores]);
        }

        $produto->fill($request->all());
        $preco = preg_replace('#[^0-9\,]#', '', $produto->preco);
        $produto->preco = str_replace(',', '.', $preco);
        $produto->save();

        return redirect()->action('ProdutosController@list');
    }

    public function delete($id){
        $this->destroy($id);
        return redirect()->action('ProdutosController@list');
    }

}

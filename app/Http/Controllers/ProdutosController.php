<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
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
}

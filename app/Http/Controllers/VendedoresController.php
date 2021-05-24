<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VendedoresController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();
        return response()->json($vendedores);
    }

    public function store(Request $request)
    {
        $vendedor = new Vendedor();
        $vendedor->fill($request->all());
        $vendedor->save();

        return response()->json($vendedor, 201);
    }

    public function show($id){
        $vendedor = Vendedor::find($id);

        if(!$vendedor) {
            return response()->json([
                'message'   => 'Vendedor não encontrado.',
            ], 404);
        }

        return response()->json($vendedor);
    }

    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::find($id);

        if (!$vendedor) {
            return response()->json([
                'message' => 'Vendedor não encontrado',
            ], 404);
        }

        $vendedor->fill($request->all());
        $vendedor->save();

        return response()->json($vendedor);
    }

    public function destroy($id)
    {
        $vendedor = Vendedor::find($id);

        if(!$vendedor) {
            return response()->json([
                'message'   => 'Vendedor não encontrado.',
            ], 404);
        }

        $vendedor->delete();
    }

    public function list(){
        $vendedores = Vendedor::all();
        return view('vendedores', ['vendedores' => $vendedores]);
    }

    public function insert(Request $request){

        if (empty($request->all())) {
            return view('formularios.inserirVendedor');
        }

        $vendedor = new Vendedor();
        $vendedor->fill($request->all());
        $vendedor->save();

        return redirect()->action('VendedoresController@list');
    }

    public function edit(Request $request, $id){

        $vendedor = Vendedor::find($id);

        if (empty($request->all())) {
            return view('formularios.alterarVendedor', ['vendedor' => $vendedor]);
        }

        $vendedor->fill($request->all());
        $vendedor->save();

        return redirect()->action('VendedoresController@list');
    }

    public function delete($id){
        $this->destroy($id);
        return redirect()->action('VendedoresController@list');
    }
}

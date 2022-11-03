<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resources\ProdutoResource;
use App\Http\Resources\Resources\ProdutoDetalheResource;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();

        return response() -> json([
            'status' => 200,
            'mensagem' => 'Lista de produtos retornada',
            'produtos' => ProdutoResource::collection($produtos)
        ], 200);
    }

    public function show($id)
    {
        $produto = Produto::find($id);

        if($produto){
            return response()->json([
                'status' => 200,
                'mensagem' => 'Detalhe do produto retornado',
                'produtos' => $produto
            ],200);
        }else{
            return response()->json([
                'status' => 404,
                'mensagem' => 'Este registro não existe',
                'produtos' => []
            ],404);
        }
    }
}

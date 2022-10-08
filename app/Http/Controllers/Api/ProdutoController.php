<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Resources\ProdutoResource;
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
}

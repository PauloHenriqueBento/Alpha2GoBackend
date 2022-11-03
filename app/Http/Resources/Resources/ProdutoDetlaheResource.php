<?php

namespace App\Http\Resources\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoDetalheResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->PRODUTO_ID,
            'PRODUTO_NOME' => $this->PRODUTO_NOME,
            'PRODUTO_DESC' => $this->PRODUTO_DESC,
            'PRODUTO_PRECO' => $this->PRODUTO_PRECO,
            'PRODUTO_DESCONTO' => $this->PRODUTO_DESCONTO
            //'CATEGORIA_ID'
        ];
    }
}

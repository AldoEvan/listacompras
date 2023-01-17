<?php

namespace App\Models\Regras;

use App\Models\Entity\Produto;

class ProdutosRegras
{
    public static function salvar($request, $id)
    {
        foreach ($request as $valores) {
            //dd($valores['nome']);
            $produto = new Produto();
            $produto->nome = $valores['nome'];
            $produto->quantidade = $valores['quantidade'];
            $produto->preco = $valores['preco'];
            $produto->ultimo_preco = $valores['ultimoPreco'];
            $produto->lista_id = $id;
            $produto->save();
        }
    }
}

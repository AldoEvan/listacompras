<?php

namespace App\Models\Regras;

use App\Models\Entity\ListaCompras;
use Carbon\Carbon;

class ListaComprasRegras 
{
    public static function salvar($request)
    {
        $listaCompras = new ListaCompras();
        $listaCompras->email = $request->email;
        $listaCompras->data = Carbon::createFromFormat("d/m/Y", $request->data)->format('d-m-Y');
        $listaCompras->total_item = $request->totalItem;
        $listaCompras->total_preco = $request->totalPreco;
        $produtos = [];
        foreach ($request->produtos as $produto) {
            $produtos[] = $produto;
        }
        $listaCompras->produtos = $produtos;
        $listaCompras->save();
        
    }

}
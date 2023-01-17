<?php

namespace App\Models\Regras;

use App\Models\Entity\ListaCompras;

class ListaComprasRegras 
{
    public static function salvar($request)
    {
        $listaCompras = new ListaCompras();
        $listaCompras->item = $request->item;
        $listaCompras->quantidade = $request->quantidade;
        $listaCompras->preco = $request->preco;
        $listaCompras->ultimo_preco = $request->ultimo_preco;
        $listaCompras->save();
    }

}
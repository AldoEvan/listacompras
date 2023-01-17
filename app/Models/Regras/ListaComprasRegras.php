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
        $listaCompras->data = Carbon::createFromFormat("d/m/Y", $request->data) ;
        $listaCompras->total_item = $request->totalItem;
        $listaCompras->total_preco = $request->totalPreco;
        $listaCompras->save();
        if(isset($request->produto)){
            ProdutosRegras::salvar($request->produto, $listaCompras->_id);
        }
    }

}
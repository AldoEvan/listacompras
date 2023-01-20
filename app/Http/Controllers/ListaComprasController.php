<?php

namespace App\Http\Controllers;

use App\Models\Entity\ListaCompras;
use App\Models\Facade\ConsultarListaDB;
use App\Models\Regras\ListaComprasRegras;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaComprasController extends Controller
{
    public function show($item)
    {
        return view('lista', [
            'compras' => ListaCompras::where('item', '=', $item)->first()
        ]);
    }
    public function store(Request $request)
    {   
        //dd($request->all());
        try {
            ListaComprasRegras::salvar($request);
            return response()->json(["message" => "Salvo Com sucesso"]);
        } catch (Exception $ex) {
            return response()->json(["message" => $ex->getMessage()]);
        }
    }
    public function create()
    {
        return ConsultarListaDB::todasListas();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'item_id' => 'required',
            'valor' => 'required|numeric',
        ]);

        $compra = new Compra();
        $compra->user_id = $request->input('user_id');
        $compra->item_id = $request->input('item_id');
        $compra->valor = $request->input('valor');

        $compra->save();

        return view('obrigado');
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Itens;

class ProductController extends Controller
{
    public function show($id)
    {
        $produto = Itens::find($id); // Supondo que você tenha um modelo chamado Produto

        return view('detalhes', compact('produto'));
    }

}

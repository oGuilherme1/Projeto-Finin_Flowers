<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorias;
use App\Models\Itens;

class ItemController extends Controller
{
    public function index()
    {
        $this->getComestiveis();
        $this->getCremes();
        $this->getOleos();
        $this->getRemedios();
        return view('categorias', [
            'remedios' => Itens::where('categoria_id', 1)->get(),
            'comestiveis' => Itens::where('categoria_id', 2)->get(),
            'cremes' => Itens::where('categoria_id', 3)->get(),
            'oleos' => Itens::where('categoria_id', 4)->get()
        ]);
    }

    public function getRemedios()
    {
        $remedios = Itens::where('categoria_id', 1)->get();
        return view('categorias', ['remedios' => $remedios]);
    }

    public function getComestiveis()
    {
        $comestiveis = Itens::where('categoria_id', 2)->get();
        return view('categorias', ['comestiveis' => $comestiveis]);
    }

    public function getCremes()
    {
        $cremes = Itens::where('categoria_id', 3)->get();
        return view('categorias', ['cremes' => $cremes]);
    }

    public function getOleos()
    {
        $oleos = Itens::where('categoria_id', 4)->get();
        return view('categorias', ['oleos' => $oleos]);
    }
}

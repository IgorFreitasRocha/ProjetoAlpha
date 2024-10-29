<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('pages.index', ['produtos' => $produtos]);
    }



    /* public function show($id)
    {
        // Buscar o produto pelo ID
        $produto = Produto::find($id);

        // Verificar se o produto foi encontrado
        if (!$produto) {
            return redirect()->route('pages.index')->with('error', 'Produto não encontrado.');
        }

        // Retornar a view com os dados do produto
        return view('pages.show', compact('produto'));
    } */



}
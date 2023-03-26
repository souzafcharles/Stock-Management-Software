<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $nome = "Balthazar";
        $idade = 3;
    
        $arr = [10,20,30];
    
        $nomes = ["Balthazar", "Ophélia", "Gumercindo"];
    
        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create(){
        return view('products.create');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;

class StockController extends Controller
{
    public function index(){

        $stocks = Stock::all();
    
        return view('welcome',['stocks' => $stocks]);
    }

    public function create(){
        return view('stocks.create');
    }

}

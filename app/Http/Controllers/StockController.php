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

    public function store(Request $request){
        $stock = new Stock;
        $stock->title = $request->title;
        $stock->supplier= $request->supplier;
        $stock->imported = $request->imported;
        $stock->description = $request->description;

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/stocks'), $imageName);
            $stock->image = $imageName;
        }

        $stock->save();
        return redirect('/')->with('msg', 'Estoque do produto criado com sucesso!');
    }

    public function show($id){
        $stock = Stock::findOrFail($id);
        return view('stocks.show', ['stock' => $stock]);
    }
}

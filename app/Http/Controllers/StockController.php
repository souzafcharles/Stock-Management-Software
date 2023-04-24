<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\User;
use Carbon\Carbon;
class StockController extends Controller
{
    public function index(){
        $search = request('search');

        if($search) {
            $stocks = Stock::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $stocks = Stock::all();
        }
        
        return view('welcome',['stocks' => $stocks, 'search' => $search]);
    }

    public function create(){
        return view('stocks.create');
    }

    public function store(Request $request){
        $stock = new Stock;
        $stock->title = $request->title;
        $stock->date = Carbon::now();
        $stock->supplier= $request->supplier;
        $stock->imported = $request->imported;
        $stock->description = $request->description;
        $stock->items = $request->items;

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/stocks'), $imageName);
            $stock->image = $imageName;
        }

        $user = auth()->user();
        $stock->user_id = $user->id;

        $stock->save();
        return redirect('/')->with('msg', 'Estoque do produto criado com sucesso!');
    }

    public function show($id){
        $stock = Stock::findOrFail($id);
        $stockOwner = User::where('id', $stock->user_id)->first()->toArray();
        return view('stocks.show', ['stock' => $stock, 'stockOwner' => $stockOwner]);
    }

    public function dashboard() {
        $user = auth()->user();
        $stocks = $user->stocks;
        return view('stocks.dashboard', ['stocks' => $stocks]);
    }

    public function destroy($id) {
        Stock::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Estoque excluído com sucesso!');
    }

    public function edit($id) {
        $user = auth()->user();
        $stock = Stock::findOrFail($id);

        if($user->id != $stock->user_id) {
            return redirect('/dashboard');
        }

        return view('stocks.edit', ['stock' => $stock]);
    }

    public function update(Request $request) {
        $data = $request->all();

        // Image Upload
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $requestImage->move(public_path('img/stocks'), $imageName);
            $data['image'] = $imageName;
        }

        $data['date'] = Carbon::now();

        Stock::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'Estoque editado com sucesso!');
    }
}

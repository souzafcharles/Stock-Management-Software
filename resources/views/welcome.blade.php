@extends('layouts.main')
@section('title','StockMS')
@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um estoque</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="stocks-container" class="col-md-12">
        <h2>Estoques cadastrados</h2>
            <p class="subtitle">Veja os estoques já cadastrados!</p>
        <div id="cards-container" class="row">
            @foreach($stocks as $stock)
                <div class="card col-md-3">
                    <img src="/img/stocks/item.png" alt="{{ $stock->title }}">
                    <div class="card-body">
                        <p class="card-date">Cadastrado em: 27/03/2023</p>
                        <h5 class="card-title">{{ $stock->title }}</h5>
                        <p class="card-supplier">{{ $stock->supplier}}</p>
                        <a href="#" class="btn btn-primary">Saber mais...</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

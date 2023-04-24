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
        @if($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Estoques cadastrados</h2>
            <p class="subtitle">Veja os estoques já cadastrados!</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($stocks as $stock)
                <div class="card col-md-3">
                    <img src="/img/stocks/{{$stock->image}}" alt="{{ $stock->title }}">
                    <div class="card-body">
                        <p class="card-date">Atualizado em: {{ date('d/m/Y H:i:s', strtotime($stock->date)) }}</p>
                        <h5 class="card-title">{{ $stock->title }}</h5>
                        <p class="card-supplier">{{ $stock->supplier}}</p>
                        <a href="/stocks/{{ $stock->id }}" class="btn btn-primary">Saber mais...</a>
                    </div>
                </div>
            @endforeach
            @if(count($stocks) == 0 && $search)
                <p>Não foi possível encontrar nenhum estoque com  {{ $search }}! <a href="/">Ver todos</a></p>
            @elseif(count($stocks) == 0)
                <p>Não há produtos disponíveis</p>
            @endif
        </div>
    </div>
@endsection

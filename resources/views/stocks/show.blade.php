@extends('layouts.main')
@section('title', $stock->title)
@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/stocks/{{ $stock->image }}" class="img-fluid" alt="{{ $stock->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $stock->title }}</h1>
        <p class="stock-supplier"><ion-icon name="person-outline"></ion-icon> {{ $stock->supplier }}</p>
        <p class="stocks-quantity"><ion-icon name="stats-chart-outline"></ion-icon> Quantidade de Itens</p>
        <p class="stock-manufacturer"><ion-icon name="business-outline"></ion-icon>Fabricante</p>
        <a href="#" class="btn btn-primary" id='stock-submit'>Confirmar informações</a>
        <h3>O armazenamento conta com:</h3>
        <ul id="items-list">
            @foreach($stock->items as $item)
                <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
            @endforeach
        <div class="col-md-12" id="description-container">
        <h3>Sobre o estoque:</h3>
        <p class="stock-description">{{ $stock->description }}</p>
      </div>
    </div>
  </div>

@endsection
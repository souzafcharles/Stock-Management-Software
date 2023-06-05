@extends('layouts.main')
@section('title',$stock->title)
@section('content')
  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/stocks/{{ $stock->image }}" class="img-fluid" alt="{{ $stock->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $stock->title }}</h1>
        <p class="stock-supplier"><ion-icon name="business-outline"></ion-icon> {{ $stock->supplier }}</p>
        <p class="stocks-quantity"><ion-icon name="stats-chart-outline"></ion-icon> {{ $stock->quantity }}</p>
        <p class="stock-owner"><ion-icon name="person-outline"></ion-icon>{{ $stockOwner['name'] }}</p>
        <h3>O armazenamento conta com:</h3>
        @if(count($stock->items) == 0)
          Nenhum item de infraestrutura
        @else
        <ul id="items-list">
            @foreach($stock->items as $item)
                <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
            @endforeach
        </ul>
        @endif
        <div class="col-md-12" id="description-container">
        <h3>Sobre o estoque:</h3>
        <p class="stock-description">{{ $stock->description }}</p>
      </div>
    </div>
  </div>

@endsection
@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus estoques</h1>
</div>
<div class="com-md 1- offset-md-1 dashboard-stocks-container">
    @if(count($stocks) > 0)
    @else
        <p>Você ainda não tem estoques, <a href="/stocks/create">criar estoque</a></p>
    @endif
</div>

@endsection
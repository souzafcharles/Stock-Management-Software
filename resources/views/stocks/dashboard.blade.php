@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus estoques</h1>
</div>
<div class="com-md 1- offset-md-1 dashboard-stocks-container">
    @if(count($stocks) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stocks as $stock)
                    <tr>
                        <td scrope="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/stocks/{{ $stock->id }}">{{ $stock->title }}</a></td>
                        <td>0</td>
                        <td>
                            <a href="/stocks/edit/{{ $stock->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                            <form action="/stocks/{{ $stock->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                            </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você ainda não tem estoques, <a href="/stocks/create">criar estoque</a></p>
    @endif
</div>

@endsection
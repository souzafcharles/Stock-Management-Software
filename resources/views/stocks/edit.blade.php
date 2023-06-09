@extends('layouts.main')

@section('title', 'Editando: ' . $stock->title)

@section('content')

    <div id="stock-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{ $stock->title }}</h1>
        <form action="/stocks/update/{{ $stock->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do Produto do Estoque:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="/img/stocks/{{ $stock->image }}" alt="{{ $stock->title }}" class="img-preview" required>
            </div>
            <div class="form-group">
                <label for="title">Produto do Estoque:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nome do produto..." value="{{ $stock->title }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantidade do produto..." min="0" value="{{ $stock->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="supplier">Fornecedor:</label>
                <input type="text" name="supplier" id="supplier" class="form-control" placeholder="Nome do fornecedor...." value="{{ $stock->supplier }}" required>
            </div>
            <div class="form-group">
                <label for="title">O produto é importado?</label>
                <select class="form-control" id="imported" name="imported" required>
                    <option value="0">Nao</option>
                    <option value="1" {{ $stock->imported == 1 ? "selected='selected'" : "" }}>Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" class="form-control" id="description" placeholder="Observações sobre o produto..." required>{{ $stock->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palete" {{ in_array('Palete', $stock->items) ? "checked" : "" }}> Palete
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="PVC"{{ in_array('PVC', $stock->items) ? "checked" : "" }}> Plástico PVC
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Caixa Plastica"{{ in_array('Caixa Plastica', $stock->items) ? "checked" : "" }}> Caixa Plástica
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Caixa de Papelao"{{ in_array('Caixa de Papelao', $stock->items) ? "checked" : "" }}> Caixa de Papelão
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Refrigeracao"{{ in_array('Refrigeracao', $stock->items) ? "checked" : "" }}> Refrigeração
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar Estoque">
        </form>
    </div>  
@endsection

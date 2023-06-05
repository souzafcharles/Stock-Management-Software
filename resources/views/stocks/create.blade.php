@extends('layouts.main')

@section('title','Adicionar Produto')

@section('content')

    <div id="stock-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione o produto ao estoque:</h1>
        <form action="/stocks" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Produto do Estoque:</label>
                <input type="file" class="form-control-file" id="image" name="image" required>
            </div>
            <div class="form-group">
                <label for="title">Produto do Estoque:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nome do produto..." required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantidade:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantidade do produto..." min="0" required>
            </div>
            <div class="form-group">
                <label for="supplier">Fornecedor:</label>
                <input type="text" name="supplier" id="supplier" class="form-control" id="city" placeholder="Nome do fornecedor...." required>
            </div>
            <div class="form-group">
                <label for="title">O produto é importado?</label>
                <select class="form-control" id="imported" name="imported" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" class="form-control" id="description" placeholder="Observações sobre o produto..." required></textarea>
            </div>
            <div class="form-group">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palete"> Palete
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="PVC"> Plástico PVC
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Caixa Plastica"> Caixa Plástica
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Caixa de Papelao"> Caixa de Papelão
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Refrigeracao"> Refrigeração
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Estoque">
        </form>
    </div>  
@endsection

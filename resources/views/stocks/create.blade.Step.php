@extends('layouts.main')

@section('title','Adicionar Produto')

@section('content')

    <div id="stock-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione o produto ao estoque:</h1>
        <form action="/stocks" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Produto do Estoque:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Produto do Estoque:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Nome do produto...">
            </div>
            <div class="form-group">
                <label for="date">Data de cadastro:</label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="supplier">Fornecedor:</label>
                <input type="text" name="supplier" id="supplier" class="form-control" id="city" placeholder="Nome do fornecedor....">
            </div>
            <div class="form-group">
                <label for="title">O produto é importado?</label>
                <select class="form-control" id="imported" name="imported">
                    <option value="0">Nao</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" class="form-control" id="description" placeholder="Observações obre o produto..."></textarea>
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
                    <input type="checkbox" name="items[]" value="Caixa Plástica"> Caixa Plástica
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

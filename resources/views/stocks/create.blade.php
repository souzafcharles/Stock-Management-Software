@extends('layouts.main')

@section('title','Adicionar Produto')

@section('content')

<head>
    <link rel="stylesheet" href="/css/registerStockProduct.css">
</head>
<div class="register">
            <form method="POST" class="registerForm">
                <h1>Cadastrar Produto</h1>

                <label>Código</label>
                <input type="text" placeholder="Digite o código..." autofocus="true" />

                <label>Nome</label>
                <input type="text" placeholder="Digite o nome..." autofocus="true" />

                <label>Descrição</label>
                <input type="text" placeholder="Digite a descrição..." autofocus="true" />

                <label>Fornecedor</label>
                <input type="text" placeholder="Digite o fornecedor..." autofocus="true" />

                <label>Fabricante</label>
                <input type="text" placeholder="Digite o fabricante..." autofocus="true" />

                <label>Lote</label>
                <input type="text" placeholder="Digite o lote..." autofocus="true" />

                <label>Preço</label>
                <input type="number" placeholder="Digite o preço..." min="0"/>

                <label>Imposto (%)</label>
                <input type="number" placeholder="Digite a taxa de imposto..." min="0">

                <label>Quantidade em estoque</label>
                <input type="number" placeholder="Digite quanto há no estoque..." />

                <label>Data de reposição</label>
                <input type="date" placeholder="Digite a data prevista para reposição..." />

                <fieldset>
                    <legend>Marque a categoria:</legend>
                    <div>
                        <input type="checkbox" id="categoryBakery" name="categoryBakery" value="Bakery">
                        <label for="categoryBakery">Padaria</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryFood" name="categoryFood" value="Food">
                        <label for="categoryFood">Alimentos</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryFrozenColdCuts" name="categoryFrozenColdCuts" value="FrozenColdCuts">
                        <label for="categoryFrozenColdCuts">Congelados & Frios</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryMeatFish" name="categoryMeatFish" value="MeatFish">
                        <label for="categoryMeatFish">Carnes & Peixes</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryProduceSection" name="categoryProduceSection" value="ProduceSection">
                        <label for="categoryProduceSection">Hortifruti</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryCleaningSupplies" name="categoryCleaningSupplies" value="CleaningSupplies">
                        <label for="categoryCleaningSupplies">Produtos de Limpeza</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryPersonalHygiene " name="categoryPersonalHygiene" value="PersonalHygiene">
                        <label for="categoryPersonalHygiene">Higiene Pessoal</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryBeverages" name="categoryBeverages" value="Beverages">
                        <label for="categoryBeverages">Bebidas</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryStationery" name="categoryStationery" value="Stationery">
                        <label for="categoryStationery">Papelaria</label>
                    </div>
                    <div>
                        <input type="checkbox" id="categoryUtensils" name="categoryUtensils" value="Utensils">
                        <label for="categoryUtensils">Utensílios</label>
                    </div>
                </fieldset>

                <a href="/product/register" class="btn">Cadastrar</a>
            </form>
        </div>    
@endsection

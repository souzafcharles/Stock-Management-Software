<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Title-->
        <title>@yield('title')</title>

        <!--Tab Icon-->
        <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.ico">

        <!--Google Font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--CSS Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!--Linked CSS-->
        <link rel="stylesheet" href="/css/main.css">

    </head>

    <body>
        <!--navbar-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/icon/icon.png" alt="Stock icon image" width="100%">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/products/create" class="nav-link">Adicionar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/logIn" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/registerUser" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!--conteúdo-->
        @yield('content')

    <footer>
        <p>StockMS - Gerencimento de Estoque &copy; 2023</p>
    </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
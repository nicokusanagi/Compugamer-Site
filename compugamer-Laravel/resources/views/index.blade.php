<html lang="pt-br">
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compugamer Shop</title>
        <link rel="stylesheet" type="text/css" href="/css/main.css">


    </head>

    <body>
        <main>

        <header class="menu-principal">
            <div class="header-1">

            <div class="logo">
                <img src="/img/logo.png" alt="logo do site" width="202" height="119"/>
            <div class="login">
                 <li><a href="{{ route('login') }}">Login</a></li>
            </div>


            </div>
        </div>
        </header>
        <main>
        <div class="header-2">
            <div class="menu">
                <li><a href="{{ route('index') }}">Inicio</a></li>
                <li><a href="{{ route('adicionar') }}">Adicionar Produto</a></li>
            </div>
            <div class="Busca">
                <input placeholder="Buscar" type="text"/>
            </div>
        </div>
        @if($products->All( ))
        <table class="w-full">
            @endif
</main>
    <main>
    </main>

</div>




    </main>

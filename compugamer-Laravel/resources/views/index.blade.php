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
</main>
    <main>
<div class="catalogo">
     <div class="Mouse">
     <li><a href="{{ route('mouse') }}">Mouse RGB 1600DPi<br>R$9999</a></li>
     <img src="/img/mouse.png" alt="mouse gamer" width="250" height="250"/>

     </div>

     <div class="Teclado">
        <li><a href="{{ route('teclado') }}">Teclado Semi-Mecânico RGB<br>R$9999</a></li>
        <img src="/img/teclado.png" alt="teclado gamer" width="250" height="250"/>
        </div>
        <div class="Fone">
            <li><a href="{{ route('fone') }}">Fone RGB Surround 7.1<br>R$9999</a></li>
        <img src="/img/fone.png" alt="fone gamer" width="250" height="250"/>
    </div>
        <div class="gabinete">
            <li><a href="{{ route('gabin') }}">Gabinete ATX RGB<br>R$9999</a></li>
            <img src="/img/gabin.png" alt="gabinete gamer" width="250" height="250"/>
        </div>

</div>




    </main>

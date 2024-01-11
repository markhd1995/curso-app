<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($Categoria)

    <h2>hola papus este el juego {{$NameVideoGame}} de la categoria {{$Categoria}}</h2>
    <h3> fecha {{$FechaActual}}.</h3>

    @else
        <h2>hola papus este el juego {{$NameVideoGame}} </h2>
    <h3> fecha {{$FechaActual}}.</h3>
    
    @endif
    


</body>
</html>
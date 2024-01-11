<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{!! asset('estilos.css')!!}">


    <title>Document</title>



</head>
<body>
    <h1>"Bienvenido a la web que listar los juegos comprados"</h1>

<button>  <a href="{{route('gamesCreate')}}">CREAR JUEGO</a> </button>
  

    <h2>LISTADO DE JUEGOS</h2>




    <table class="default">

        <tr>
      
          <th>ID</th>
      
          <th>NOMBRE</th>
      
          <th>CATEGORIA</th>

          <th>ESTADO</th>

          <th>FECHA_CREACION</th>

          <th>ACCION</th>
        </tr>
      
        


    @forelse  ($games as $game)

    <tr>
      
        <td>{{$game->id}}</td>
    
        <td><a href="{{route('editarGame',$game->id)}}"> {{$game->name}} </a></td>
        
        <td>{{$game->category_id}}</td>

        <td>
            @if ($game->active)
            <span style="color:green">Activo</span>   
            @else
            <span style="color:red">Inactivo</span>   
            @endif
           
        </td>
    
        <td>{{$game->created_at->diffForHumans()}}</td>

       <td> <button><a href="{{route('deleteGame',$game->id)}}">Eliminar</a> </button>   </td>
    
      </tr>

    @empty
    <tr>
        <td>No hay datos<td>
    <tr>
    @endforelse

    </table>
  


</body>
</html>
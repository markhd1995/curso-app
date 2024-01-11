<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="{!! asset('estilos2.css')!!}">
    <title>Document</title>
    
</head>
<body>
<h1>"Bienvenido aca crearemos los juegos"</h1>

<button>  <a href="{{route('games')}}">LISTA DE JUEGOS</a> </button>

<h2>REGISTRAR JUEGOS</h2>

<form action="{{route('createVideogame')}}" method="POST">

    @csrf

    <input type="text" placeholder="Nombre del video juego" name="name_game">
  @error('name_game')
      {{$message}}
  @enderror


<select name="categoria_id" id="">

@forelse  ($categorias as $categoria)

<option value="{{$categoria->id}}">{{$categoria->name}}</option>

@empty
<option value="">No existen </option>
@endforelse
</select>

<input type="submit" value="Enviar">
</form>

 
</body>
</html>
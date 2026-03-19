<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Cliente</h1>
        <form action="/cliente/{{$cliente->id}}" method="POST">
            @csrf
            @method('DELETE')

            <label for="name">Id</label>
            <input type="text" name="Id" id="id" value="{{$cliente->id}}" >

            <label for="nombre">Nombre</label>

            <input type="text" name="nombre" id="nombre" value="{{$cliente->nombrecliente}}" >

            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="{{$cliente->apellidocliente}}" >

            <label for="">Ciudad</label>
            <input type="text" name="ciudad" value="{{$cliente->ciudadcliente}}" id="ciudad" >

            <button type="submit">Eliminar Cliente</button>
</body>
</html>
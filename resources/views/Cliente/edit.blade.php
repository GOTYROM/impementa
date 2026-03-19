<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Cliente</h1>
     <form action="/cliente/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigocliente">Codigo</label>
        <input type="text" name="codigocliente" id="codigocliente" value="{{$cliente->codigocliente}}">

        <label for="nombrecliente">Nombre</label>
        <input type="text" name="nombrecliente" id="nombrecliente" value="{{$cliente->nombrecliente}}">

        <label for="apellidocliente">Apellido</label>
        <input type="text" name="apellidocliente" id="apellidocliente" value="{{$cliente->apellidocliente}}">

        <label for="ciudadcliente">Ciudad</label>
        <input type="text" name="ciudadcliente" id="ciudadcliente" value="{{$cliente->ciudadcliente}}">

        <button type="submit">Guardar Cliente</button>


</body>
</html>
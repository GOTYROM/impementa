<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Telefono</h1>
        <form action="/telefono/{{$telefono->id}}" method="POST">
        @csrf
        @method('DELETE')

        <label for="codigocliente">Codigo Cliente</label>
        <input type="number" name="codigocliente" id="codigocliente" value="{{$telefono->codigocliente}}">
     
        <label for="numero">Numero Telefono</label>
        <input type="text" name="numero" id="numero" value="{{$telefono->numero}}">
       
        <button type="submit">Eliminar Telefono</button>
    </form>
</body>
</html>
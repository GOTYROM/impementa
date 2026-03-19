<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Telefono</title>
</head>
<body>
    <h1>Editar Telefono</h1>
    
    <form action="/telefono/{{$telefono->id}}" method="POST">
        @csrf
        @method('PUT')

        <label for="codigocliente">Codigo Cliente</label>
        <input type="number" name="codigocliente" id="codigocliente" value="{{$telefono->codigocliente}}">
     
        <label for="numero">Numero Telefono</label>
        <input type="text" name="numero" id="numero" value="{{$telefono->numero}}">
       
        <button type="submit">Editar Telefono</button>
    </form>
</body>
</html>
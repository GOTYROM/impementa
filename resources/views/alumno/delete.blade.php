<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Eliminar Alumno</h1>
        <form action="/alumno/{{$alumnoe->id}}" method="POST">
            @csrf
            @method('DELETE')

            <label for="name">Id</label>
            <input type="text" name="Id" id="id" value="{{$alumnoe->id}}" >

            <label for="nombre">Nombre</label>

            <input type="text" name="nombre" id="nombre" value="{{$alumnoe->nombre}}" >

            <label for="">Apellido</label>
            <input type="text" name="apellido" id="apellido" value="{{$alumnoe->apellido}}" >

            <label for="">Edad</label>
            <input type="number" name="edad" value="{{$alumnoe->edad}}" id="edad" >

            <button type="submit">Eliminar Alumno</button>
</body>
</html>
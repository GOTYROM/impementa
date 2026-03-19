<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Listas de Alumnos</h1>
            <a href='alumno/create' class="btn btn-primary">Crear Alumno</a>
        </div>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
        <td>Editar</td>
        <td>Eliminar</td>
    </tr>
</thead>
<tbody>
@foreach($resultado as $alumno)
<tr>
<td>{{$alumno->id}}</td>
<td>{{$alumno->nombre}}</td>
<td>{{$alumno->apellido}}</td>
<td>{{$alumno->edad}}</td>
<td><a href="/alumno/{{$alumno->id}}/edit" class="btn btn-warning">Editar</a></td>


<td>
    <form action="{{ route('alumno.destroy', $alumno->id) }}" method ="POST">
        @csrf
        @method('DELETE')
    <button type="Submit" class="btn btn-danger">Eliminar {{$alumno->id}}</button>
</form> 
</td>

</tr>
@endforeach
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
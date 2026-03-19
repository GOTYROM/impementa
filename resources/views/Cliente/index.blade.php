<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Listas de Clientes</h1>  
            <a href='/cliente/create' class="btn btn-primary">Crear Cliente</a>
        </div>

        <table class="table table-striped table-hover shadow-sm">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>Id</th>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Ciudad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dcliente as $cliente)
                <tr class="text-center">
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->codigocliente}}</td>
                    <td>{{$cliente->nombrecliente}}</td>
                    <td>{{$cliente->apellidocliente}}</td>
                    <td>{{$cliente->ciudadcliente}}</td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="/telefono/{{$cliente->id}}" class="btn btn-success btn-sm">
                                <i class="bi bi-telephone"></i> Teléfonos
                            </a>

                            <a href="/cliente/{{$cliente->id}}/edit" class="btn btn-secondary btn-sm">Editar</a>
                            
                            <form action="/cliente/{{$cliente->id}}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
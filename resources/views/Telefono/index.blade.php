<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Listas de Teléfonos</title>
</head>
<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Listas de Teléfonos</h1>
            <a href="/telefono/create" class="btn btn-primary">Agregar Teléfono</a>
        </div>

        <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
        <th>Id</th>
        <th>Código Cliente</th>
        <th>Número Teléfono</th>
        <th class="text-center">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($telefono as $item)
            <tr>
                 <td>{{ $item->id }}</td>
                 <td>{{ $item->codigocliente }}</td>
                 <td>{{ $item->numero }}</td>
                <td>
                    <div class="d-flex gap-2 justify-content-center">
                         <a href="/telefono/{{$item->id}}/edit" class="btn btn-secondary btn-sm">Editar</a>
                         
                  <form action="/telefono/{{$item->id}}" method="POST">
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
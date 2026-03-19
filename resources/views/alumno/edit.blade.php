<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Editar Alumno</title>
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h1 class="h4 m-0">Editar Alumno</h1>
      </div>
      <div class="card-body">
        <form action="/alumno/{{$alumnoe->id}}" method="POST">
          @csrf
          @method('PUT')
          
          <div class="mb-3">
            <label class="form-label">Id: <strong>{{$alumnoe->id}}</strong></label>
          </div>

          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$alumnoe->nombre}}">
          </div>

          <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{$alumnoe->apellido}}">
          </div>

          <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" name="edad" id="edad" class="form-control" value="{{$alumnoe->edad}}">
          </div>

          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Guardar Alumno</button>
            <a href="/alumno" class="btn btn-secondary">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
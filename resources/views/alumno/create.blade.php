<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Crear Alumno</title>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-dark text-white text-center">
            <h1 class="h4 m-0">Registro de Alumno</h1>
          </div>
          <div class="card-body p-4">
            <form action="/alumno" method="POST">
              @csrf
              
              <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese el nombre" required>
              </div>

              <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ingrese el apellido" required>
              </div>

              <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" name="edad" id="edad" class="form-control" placeholder="00" required>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Guardar Alumno</button>
                <a href="/alumno" class="btn btn-outline-secondary text-center">Cancelar</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Crear Cliente</title>
</head>
<body>
  <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h1 class="h4 m-0">Crear Cliente</h1>
      </div>
      <div class="card-body">
        <form action="/cliente" method="POST">
          @csrf
          
          <div class="mb-3">
            <label for="codigocliente" class="form-label">Código</label>
            <input type="text" name="codigocliente" id="codigocliente" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="nombrecliente" class="form-label">Nombre</label>
            <input type="text" name="nombrecliente" id="nombrecliente" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="apellidocliente" class="form-label">Apellido</label>
            <input type="text" name="apellidocliente" id="apellidocliente" class="form-control" required>
          </div>

          <div class="mb-3">
            <label for="ciudadcliente" class="form-label">Ciudad</label>
            <input type="text" name="ciudadcliente" id="ciudadcliente" class="form-control" required>
          </div>

          <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Guardar Cliente</button>
            <a href="/cliente" class="btn btn-secondary">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
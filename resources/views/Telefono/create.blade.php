<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>

<div class="container">
<body>
    <h1>Crear Telefono</h1>
    <form action="/telefono" method="POST">
        @csrf
        <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Codigo Cliente</span>
        <input type="text" class="form-control" placeholder="Codigo Cliente" aria-label="Codigo" aria-describedby="addon-wrapping" name="codigocliente" id="codigocliente">
        </div>

<div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Numero Telefono</span>
        <input type="text" class="form-control" placeholder="Numero Telefono" aria-label="Numero" aria-describedby="addon-wrapping" name="numero" id="numero">
        </div>


       

        <button type="submit" class="btn btn-danger">Guardar telefono</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</div>
</html>
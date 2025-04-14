<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php 
include_once '../templates/header.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center">Agregar Producto</h2>
            <form method="POST" action='../../..controles/productos/guardar_producto.php'>
    <div class="form-group">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" class="form-control" step="0.01" required>
    </div>
    <button type="submit" class="btn btn-primary">Guardar producto</button>
</form>
        </div>
    </div>
</div>

<?php 
include_once '../templates/footer.php';
?>
</body>
</html>

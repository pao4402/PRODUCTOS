<?php 
include 'conexion.php';


if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    if (!empty($nombre) && $precio > 0) {
        $conexion = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');
        $sql = "INSERT INTO productos (producto_nombre, producto_precio) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sd", $nombre, $precio);

        if ($stmt->execute()) {
            echo "<script>alert('Producto guardado exitosamente');</script>";
        } else {
            echo "<script>alert('Error al guardar el producto');</script>";
        }

        $stmt->close();
        $conexion->close();
    } else {
        echo "<script>alert('Datos inválidos');</script>";
    }
}
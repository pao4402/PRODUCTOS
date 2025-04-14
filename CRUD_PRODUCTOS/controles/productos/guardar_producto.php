<?php
require_once 'productos.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    if (!empty($nombre) && $precio > 0) {
        $producto = new Producto();
        if ($producto->guardarProducto($nombre, $precio)) {
            echo "<script>alert('Producto guardado exitosamente');</script>";
        } else {
            echo "<script>alert('Error al guardar el producto');</script>";
        }
    } else {
        echo "<script>alert('Datos inválidos');</script>";
    }
}
?>
<?php
class Producto {
    private $conexion;

    public function __construct() {
        try {
            $servidor = "host.docker.internal";
            $puerto = "9088";
            $basedatos = "productos";
            $usuario = "informix";
            $contrasena = "in4mix";
            $dsn = "informix:host=$servidor;service=$puerto;database=$basedatos;server=informix;protocol=onsoctcp;EnableScrollableCursors=1";
            $this->conexion = new PDO($dsn, $usuario, $contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public function guardarProducto($nombre, $precio) {
        try {
            $sql = "INSERT INTO productos (producto_nombre, producto_precio) VALUES (:nombre, :precio)";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':precio', $precio);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
?>
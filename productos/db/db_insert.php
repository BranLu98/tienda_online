<?php
    $nombre = $_GET['producto'];
    $precio_venta = $_GET['precio_venta'];
    $existencias = $_GET['existencias'];
    $descripcion = $_GET['descripcion'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO producto (nombre,precio_venta,existencias,descripcion) VALUES ('$nombre', '$precio_venta', '$existencias', '$descripcion');");
    
    header("Location: ../index.php");

?>

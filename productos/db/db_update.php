<?php

    $id_producto = $_GET['id_producto'];
    $nombre = $_GET['producto'];
    $precio_venta = $_GET['precio_venta'];
    $existencias = $_GET['existencias'];
    $descripcion = $_GET['descripcion'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE producto SET nombre='$nombre', precio_venta='$precio_venta', existencias='$existencias', descripcion='$descripcion' WHERE id_producto='$id_producto';");
    header("Location: ../index.php");

?>

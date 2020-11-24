<?php
    $cantidad = $_POST['cantidad'];
    $producto = $_POST ['producto'];
    $total = $_POST ['totalCompra'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO ticket (cantidad_producto,producto,total_producto) VALUES ( '$cantidad', '$producto', '$total');");
    
    header("Location: ticket.php");
?>


<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");
    $resultado = $db->query('SELECT * from producto;');
     $row_cnt = $resultado->num_rows;
     while ($row = mysqli_fetch_array($resultado)) {
                  
       printf("Result set has %d rows.\n", $row_cnt);
        
    }   

   
    $form = "
            <h2>productos</h2>
            <div class='form-group'>
            <label for='sel1'>lista de productos (selecciona uno):</label>
            <select class='form-control' id='producto' name='producto'>
                <option value='0' selected>Selecciona un producto</option>

                 while (row_cnt) {
                  echo '<option>1</option>'
                }
                
            </select>
            
            <label for='cantidad'>cantidad:</label>
            <input type='number' class='form-control' id='cantidad_product' placeholder='Ingresa la cantidad' name='cantidad'>
            <br>
            <input type='button' id='insert' class='btn btn-primary' onclick='insertar()'  value='Insertar'> 
            <input type='button' id ='compra' class='btn btn-danger' onclick='limpiar()' value='Nueva compra'> 
            <br>
            <br>      
            <h2>carrito de compras</h2>
            <textarea class='form-control' rows='5' id='comment' name='comment' ></textarea>
            <br>
            <label for='totalCompra'>Total:</label>
            <input type='text' value='0' id='totalCompra' name='totalCompra' class='campodeshabilitado'>
            <br>
            <label for='cantidad'>pago:</label>
            <input type='number' class='form-control' id='pago' placeholder='Ingresa el monto recibido' name='pago'>
            <br>
            <input type='submit' class='btn btn-info' value='Pagar' onclick='validateForm()'>
            </div>
            ";
   print($form);
?>

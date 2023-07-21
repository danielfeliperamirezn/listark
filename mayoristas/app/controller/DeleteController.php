<?php

    include_once '../config.php';

    $id = $_POST['id'];
    $codigo_producto = $_POST['codigo_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $linea_producto = $_POST['linea_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    $precio = $_POST['precio'];
    $estado = "deshabilitado";

    // Prepare the update statement
    $stmt = $db->prepare('UPDATE productos SET codigo_producto = :codigo_producto, nombre_producto = :nombre_producto, linea_producto = :linea_producto, categoria_producto = :categoria_producto, precio = :precio 
    estado = :estado  WHERE id = :id');

    // Bind the values to the parameters
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':codigo_producto', $codigo_producto);
    $stmt->bindParam(':nombre_producto', $nombre_producto);
    $stmt->bindParam(':linea_producto', $linea_producto);
    $stmt->bindParam(':categoria_producto', $categoria_producto);
    $stmt->bindParam(':precio', $precio);
    $stmt->bindParam(':estado', $estado);

    // Execute the statement
    $stmt->execute();

    // Check if the statement was successful
    if ($stmt->rowCount() > 0) {
        // The statement was successful
        echo 'El producto se actualizó correctamente.';
        echo "<script type='text/javascript'>
            window.location='../views/update.php';
        </script>";
    } else {
        // The statement was not successful
        echo 'Hubo un error al actualizar el producto.';
    }
?>
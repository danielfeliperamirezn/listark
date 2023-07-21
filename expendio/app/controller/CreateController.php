<?php

$db = include_once '../config.php';
// $path = '/app/src/js/app.js';
// $content = file_get_contents($path);

$request = $_POST;

$codigo_producto = $request['codigo_producto'];
$nombre_producto = $request['nombre_producto'];
$linea_producto = $request['linea_producto'];
$categoria_producto = $request['categoria_producto'];
$precio = $request['precio'];
$estado = "activo";

$stmt = $db->prepare("INSERT INTO expendio (codigo_producto, nombre_producto, linea_producto, categoria_producto, precio, estado) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the values
$stmt->bindParam(1, $codigo_producto);
$stmt->bindParam(2, $nombre_producto);
$stmt->bindParam(3, $linea_producto);
$stmt->bindParam(4, $categoria_producto);
$stmt->bindParam(5, $precio);
$stmt->bindParam(6, $estado);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    ?>
    <script>
        alert("Registro realizado con éxito");
    </script>
    <?php 
} else {
    // The statement was not successful
    echo "Hubo un error al agregar el registro.";
}

 header('Location: ../views/create.php');

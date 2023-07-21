<?php

    include_once '../config.php';

    $responsable = $_POST['responsable'];
    $modificacion = $_POST['modification'];
    $fecha = $_POST['fechaValida'];


    $stmt = $db->prepare("INSERT INTO registros (responsable, fecha_de_modificacion, fecha_valida) VALUES (?, ?, ?)");

    $stmt->bindParam(1, $responsable);
    $stmt->bindParam(2, $modificacion);
    $stmt->bindParam(3, $fecha);

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
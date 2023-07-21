<?php

    include_once './app/config.php';
    include_once './app/views/header.php';

    $res = $db->query('SELECT * FROM porcionado WHERE linea_producto = "Res" AND estado = "activo"  ORDER BY id DESC');
    $cerdo = $db->query('SELECT * FROM porcionado WHERE linea_producto = "cerdo"  AND estado = "activo"  ORDER BY id DESC');
    $frias = $db->query('SELECT * FROM porcionado WHERE linea_producto = "carnes frias"  AND estado = "activo"  ORDER BY id DESC');
    $premium = $db->query('SELECT * FROM porcionado WHERE linea_producto = "cortes premium"  AND estado = "activo"  ORDER BY id DESC');
    $date = $db->query('SELECT * FROM registros ORDER BY id DESC LIMIT 1;');

    while ($fecha = $date->fetch(PDO::FETCH_ASSOC)) {
        $fechaFinal = $fecha['fecha_valida'];
    }

?>
    <section class="mainPrecios mainCentral">
        <div class="containerTitle">    
            <p>Esta lista de precios está sujeta a cambios </p>
            <p>Vigencia Hasta: <span> <?php echo $fechaFinal ?> </span> </p>
        </div>
        <div class="containerPrecios">
            <table class="table_precios">
                <thead>
                    <tr>
                        <th>Código del producto</th>
                        <th>Nombre del Producto</th>
                        <th>Cateogría del producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="type">
                        <h2>Res</h2>
                    </div>
                    <?php
                        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['codigo_producto']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <?php 
                            $conver = $row['precio']; 
                            $precio = number_format($conver);
                        ?>
                        <td>$<?php echo $precio ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <table class="table_precios">
                <thead>
                    <tr>
                        <th>Código del producto</th>
                        <th>Nombre del Producto</th>
                        <th>Cateogría del producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="type">
                        <h2>Cerdo</h2>
                    </div>
                    <?php
                        while ($row = $cerdo->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['codigo_producto']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <?php 
                            $conver = $row['precio']; 
                            $precio = number_format($conver);
                        ?>
                        <td>$<?php echo $precio ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <table class="table_precios">
                <thead>
                    <tr>
                        <th>Código del producto</th>
                        <th>Nombre del Producto</th>
                        <th>Cateogría del producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="type">
                        <h2>Carnes Frias</h2>
                    </div>
                    <?php
                        while ($row = $frias->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['codigo_producto']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <?php 
                            $conver = $row['precio']; 
                            $precio = number_format($conver);
                        ?>
                        <td>$<?php echo $precio ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <table class="table_precios">
                <thead>
                    <tr>
                        <th>Código del producto</th>
                        <th>Nombre del Producto</th>
                        <th>Línea del Producto</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <div class="type">
                        <h2>Cortes Premium</h2>
                    </div>
                    <?php
                        while ($row = $premium->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        
                        <td><?php echo $row['codigo_producto']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <?php 
                            $conver = $row['precio']; 
                            $precio = number_format($conver);
                        ?>
                        <td>$<?php echo $precio ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="actions">
            <a href="./app/views/create.php">Create new record</a>
            <a href="./app/views/update.php">Update record</a>
        </div>
    </section>
<?php
    include_once './app/views/footer.php';
?>
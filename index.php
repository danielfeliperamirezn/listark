<?php
    include_once './app/config.php';
    include_once './app/views/header.php';

    $res = $db->query('SELECT * FROM productos WHERE linea_producto = "Res"');
    $cerdo = $db->query('SELECT * FROM productos WHERE linea_producto = "cerdo"');
    $frias = $db->query('SELECT * FROM productos WHERE linea_producto = "carnes frias"');
    $premium = $db->query('SELECT * FROM productos WHERE linea_producto = "cortes premium"');


?>
    <section class="mainPrecios">
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
                        <td>$<?php echo $row['precio']; ?></td>
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
                        <td><?php echo $row['linea_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <td>$<?php echo $row['precio']; ?></td>
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
                        <td><?php echo $row['linea_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <td>$<?php echo $row['precio']; ?></td>
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
                        <th>Cateogría del producto</th>
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
                        <td><?php echo $row['linea_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <td>$<?php echo $row['precio']; ?></td>
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
            <a href="./app/views/delete.php">Delete record</a>
        </div>
    </section>

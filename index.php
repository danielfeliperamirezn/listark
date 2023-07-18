<?php
    include_once './app/config.php';
    include_once './app/views/header.php';

    $query = $db->query('SELECT * FROM productos');

?>
    <section class="mainPrecios">
        <div class="containerPrecios">
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
                    <?php
                        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $row['codigo_producto']; ?></td>
                        <td><?php echo $row['nombre_producto']; ?></td>
                        <td><?php echo $row['linea_producto']; ?></td>
                        <td><?php echo $row['categoria_producto']; ?></td>
                        <td><?php echo $row['precio']; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        <div class="actions">
            <a href="./app/views/create.php">Create new record</a>
            <a href="./app/views/update.php">Update record</a>
            <a href="./app/views/delete.php">Delete record</a>
        </div>
    </section>

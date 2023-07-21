<?php
    include_once 'header.php';
    include_once '../config.php';

    $res = $db->query('SELECT * FROM mayorista WHERE linea_producto = "Res"');
    $cerdo = $db->query('SELECT * FROM mayorista WHERE linea_producto = "cerdo"');
    $frias = $db->query('SELECT * FROM mayorista WHERE linea_producto = "carnes frias"');
    $premium = $db->query('SELECT * FROM mayorista WHERE linea_producto = "cortes premium"');
?>
<div class="containerContentCreate mainCentral">
    <div class="containerCreateProduct">
        <div class="containerFormCreate">
            <div class="contentHeaderCreate">
                <h1>Formulario</h1>
                <p>Ingresa los datos del producto</p>
            </div>
            <form action="../controller/CreateController.php" method="post">
                <p>Diligencia la información para agregar un nuevo producto a la lista</p>
                <input type="number" name="codigo_producto" placeholder="Codigo producto" required>
                <input type="text" name="nombre_producto" placeholder="nombre producto" required>
                <select name="linea_producto" id="linea_producto">
                    <option value="">ELIJA UNA OPCIÓN</option>
                    <option value="Res">Res</option>
                    <option value="Cerdo">Cerdo</option>
                    <option value="Cortes premium">Cortes premium</option>
                    <option value="Carnes frias">Carnes frias</option>
                </select>
                <input type="text" name="categoria_producto" placeholder="categoria producto" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit" value="Crear Producto">
            </form>
        </div>
        <div class="containerButton">
            <a href="../../"> Lista de Precios</a>
            <a href="../views/update.php"> Editar Productos </a>
        </div>
    </div>
    <div class="ContainerListPrecio">
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
    </div>
</div>
<?php
    include_once 'footer.php';
?>
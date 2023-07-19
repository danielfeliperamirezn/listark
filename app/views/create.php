<?php
    include_once 'header.php';
    include_once '../config.php';
    $query = $db->query('SELECT * FROM productos ORDER BY id DESC');
?>
<div class="containerContentCreate">
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
                    <option value="Res">Cerdo</option>
                    <option value="Res">Pollo</option>
                    <option value="Res">Carnes Frias</option>
                </select>
                <input type="text" name="categoria_producto" placeholder="categoria producto" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit" value="Crear Producto">
            </form>
        </div>
        <div class="containerButton">
            <a href="/listadepreciosrikatas/index.php"> Lista de Precios</a>
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
                        <td>$<?php echo $row['precio']; ?></td>
                    </tr>
                    <?php   
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
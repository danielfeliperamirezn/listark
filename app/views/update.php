<?php
    include_once 'header.php';
    include_once '../config.php';
    $query = $db->query('SELECT * FROM productos ORDER BY id DESC');
?>
<div class="containerSectionUpdate">
    <div class="containerButton">
        <a href="/listadepreciosrikatas/index.php"> Lista de Precios Clientes </a>
        <a href="../views/create.php"> Crear Producto </a>
    </div>
</div>
<div class="containerContentUpdate">
    <div class="headerUpdateProduct">
        <h2>Editar productos</h2>
        <p>Para actualizar cada producto, es necesario que lo edites por separado.</p>
    </div>
    <div class="ContainerListPrecioUpdate">
        <div class="containerPrecios">
            <div class="contentLabel">
                <label for="">Código del producto</label>
                <label for="">Código del producto</label>
                <label for="">Código del producto</label>
                <label for="">Código del producto</label>
                <label for="">Código del producto</label>
            </div>
            <?php
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <div class="containerFormUpdate">
                <div class="containerModalEdit">
                    <form method="POST" action="../controller/UpdateController.php">  
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="number" name="codigo_producto" placeholder="Codigo producto" value="<?php echo $row['codigo_producto']; ?>" required>
                        <input type="text" name="nombre_producto" placeholder="nombre producto" value="<?php echo $row['nombre_producto']; ?>" required>
                        <select name="linea_producto" id="linea_producto">
                            <option value="<?php echo $row['linea_producto']; ?>"><?php echo $row['linea_producto']; ?></option>
                            <option value="Res">Res</option>
                            <option value="Res">Cerdo</option>
                            <option value="Res">Pollo</option>
                            <option value="Res">Carnes Frias</option>
                        </select>
                        <input type="text" name="categoria_producto" placeholder="categoria producto" value="<?php echo $row['categoria_producto']; ?>" required>
                        <input type="number" name="precio" placeholder="precio" value="<?php echo $row['precio']; ?>" required>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
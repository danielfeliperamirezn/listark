<?php

    include_once 'header.php';
    include_once '../config.php';
    $query = $db->query('SELECT * FROM mayorista ORDER BY id DESC');

?>

<div class="containerSectionUpdate">
    <div class="containerButton">
        <a href="/listadepreciosrikatas/mayoristas/mayoristas.php"> Lista de Precios Clientes </a>
        <a href="../views/create.php"> Crear Producto </a>
    </div>
</div>
<div class="containerContentUpdate">
    <div class="headerUpdateProduct">
        <h2>Editar productos</h2>
        <p>Para actualizar cada producto, es necesario que lo edites por separado.</p>
    </div>
    <div class="ContainerListPrecioUpdate">
        <table class="table_precios">
            <thead>
                <tr>
                    <th>Código del producto</th>
                    <th>Nombre</th>
                    <th>categoría de produto</th>
                    <th>Línea de producto</th>
                    <th>Precio</th>
                    <th>Estado</th>
                    <th>Guardar</th>
                    <th>Deshabilitar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $linea = $row['linea_producto'];
                        $estado = $row['estado'];
                ?>
                <tr>
                    <form action="../controller/UpdateController.php" method="POST">  
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                        <input type="hidden" value="<?php echo $row['estado']; ?>" name="estado">
                        <td> 
                            <input type="number" name="codigo_producto" placeholder="Codigo producto" value="<?php echo $row['codigo_producto']; ?>" required>
                        </td>
                        <td> 
                            <input type="text" name="nombre_producto" placeholder="nombre producto" value="<?php echo $row['nombre_producto']; ?>" required>
                        </td>
                        <td>
                            <select name="linea_producto" id="linea_producto">
                                <option value="<?php echo $row['linea_producto']; ?>"><?php echo $row['linea_producto']; ?></option>
                                <option value="Res">Res</option>
                                <option value="cerdo">Cerdo</option>
                                <option value="Cortes premium">Cortes Premium</option>
                                <option value="frias">Carnes Frias</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="categoria_producto" placeholder="categoria producto" value="<?php echo $row['categoria_producto']; ?>" required>
                        </td>
                        <td>
                            <input type="number" name="precio" placeholder="precio" value="<?php echo $row['precio']; ?>" required>
                        </td>
                        <td>
                            <select name="estado" id="estado">
                                <?php 
                                    if($row['estado'] == "activo") { ?>
                                        <option value="activo">Activo</option>
                                        <option value="deshabilitado">deshabilitado</option>
                                    <?php
                                    } else { ?>
                                        <option value="deshabilitado">deshabilitado</option> 
                                        <option value="Activo">Activo</option> 
                                    <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="action" value="Guardar" />
                        </td>
                        <td>
                            <input type="submit" name="action" value="Deshabilitar" class="btnColor2" />                          
                        </td>
                    </form>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <div class="contentRegisterDate">
            <div class="contentHeader">
                <p>Actualiza la fecha de vigencia</p>
            </div>
            <form action="../controller/SaveDate.php" method="POST">
                <div>
                    <label for="">¿Quien modificó?</label>
                    <select name="responsable" id="responsable">
                        <option value="Nancy">Nancy Peña</option>
                        <option value="Melissa Rodriguez">Melissa Rodriguez</option>
                    </select>
                </div>
                <div>
                    <label for="">valido hasta:</label>
                    <input type="date" name="fechaValida" id="fechaValida">
                    <input type="hidden" name="modification" value="<?php echo date('Y-m-d H:i:s'); ?>">
                </div>
                <div>
                    <input type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </div>
    </div>
</div>

<?php
    include_once 'footer.php';
?>
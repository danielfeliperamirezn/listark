<?php
    include_once 'header.php';
?>

<section class="containerFormCreate">
    <div class="contentHeaderCreate">
        <h1>Formulario</h1>
        <p>Ingresa los datos del producto</p>
    </div>
    <form action="../controller/CreateController.php" method="post">
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
</section>
<section class="containerButton">
    <a href="/listadepreciosrikatas/index.php"> Lista de Precios </a>
</section>

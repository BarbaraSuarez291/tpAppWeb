<?php include("./includes/header.php"); ?>
<h1>Nuevo producto</h1>
<form action="alta_producto_sql.php" method="post">

    <input type="text">
    <div>
        <label for="nombreProd">Producto</label>
        <input type="text" name="nombreProd" id="nombreProd" placeholder="Nombre del Producto">
    </div>
    <div>
        <label for="codigo">Codigo</label>
        <input type="text" id="codigo" name="codigo" placeholder="Codigo">
    </div>
    <div class="mb-3">
        <label for="price">Precio</label>
        <input type="text" name="price" id="price" placeholder="Precio">
    </div>

    <div>

        <div>
            <textarea for="description" name="description"></textarea>
            <label for="description" name="description">Descripcion del producto</label>
        </div>



        <select name="category">
            <option selected>Categoria</option>
            <option value="1">Remeras</option>
            <option value="2">Pantalones/Shorts</option>
            <option value="3">Camperas</option>
            <option value="4"></option>
        </select>
        <div><button type="submit" class="btn btn-primary">enviar </button></div>


</form>



<?php include("./includes/footer.php"); ?>
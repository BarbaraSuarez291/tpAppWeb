<?php include("./includes/header.php");
$error = false;
if (isset($_GET['messageError'])) {
    $messageError =  $_GET['messageError'];
    $error = true;
}
$message = "Error. Verifique los campos.";
?>

<div class="row">
    <div class="col-2"></div>
<div class="col-8">
<?php if ($error == true) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><?php echo $message; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
</div>
<div class="col-2"></div>
</div>
<div class="row container-fluid">
   <div></div>
    <div class="col-4"></div>
    <div class="col-6" style="margin: 0 auto;padding-top:30px;">
        <div>
            <h1>Nuevo producto</h1>
        </div>
    </div>
    <div class="col-4"></div>
</div>
<div class="row  form-registro">
    <div class="col-2"></div>
    <div class="col-8 " style="padding-top:30px;">


        <form action="alta_producto_sql.php" method="post">

            
            <div>

                <input type="text" name="nombreProd" id="nombreProd" placeholder="Nombre del Producto">
            </div>
            <div>

                <input type="text" id="codigo" name="codigo" placeholder="Codigo" required>
            </div>
            <div class="mb-3">

                <input class="input" type="text" name="price" id="price" placeholder="Precio" required>
            </div>

            <div>
                <div> <textarea  class="input" for="description" name="description" placeholder="Descripcion" required></textarea></div>
            </div>


            <br>
            <div>
            <select class="input" name="category" required>
                <option value="">Categoria</option>
                <option value="1">Remeras</option>
                <option value="2">Pantalones/Shorts</option>
                <option value="3">Camperas</option>
                <option value="4"></option>
            </select>
            </div>
            <br>
            <div><button type="submit" class="btn btn-success">Agregar producto</button></div>


        </form>

    </div>
    <div class="col-2"></div>
</div>


<?php include("./includes/footer.php"); ?>
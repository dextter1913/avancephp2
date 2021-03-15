<?php
include("fragmentos/header.php");
include("clases/conexionOpen.php");
?>

<div class="row">
    <div class="col-4 col-md-5"></div>
    <?php
    if (isset($_GET['id'])) {
        $_id = $_GET['id'];
        $seleccionar = mysqli_query($conexion, "SELECT * FROM portatil WHERE id_por = '$_id'");

        if (mysqli_num_rows($seleccionar) == 1) {
            $row = mysqli_fetch_array($seleccionar);
            $marca = $row['marca_por'];
            $calidad = $row['calidad_por'];
            $valor_por = $row['valor_por'];
        }
    }
    if (isset($_POST['btnmodificar'])) {
        $_id = $_GET['id'];
        $_marca = $_POST['marca'];
        $_calidad = $_POST['calidad'];
        $_precio = $_POST['precio'];

        mysqli_query($conexion, "UPDATE portatil SET marca_por = '$_marca', calidad_por = '$_calidad', valor_por = '$_precio' WHERE id_por = '$_id'");
        header("location:index.php");
    }
    ?>
    <div class="col-4 col-md-2">
        <form action="modificar.php?id=<?php echo $_GET['id']; ?>" method="post">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca" value="<?php echo $marca; ?>" class="form-control">
            <label for="calidad">Calidad</label>
            <input type="text" name="calidad" id="calidad" value="<?php echo $calidad; ?>" class="form-control">
            <label for="precio">Precio</label>
            <input type="text" name="precio" id="precio" value="<?php echo $valor_por; ?>" class="form-control"><br>
            <input type="submit" value="Modificar" class="btn btn-secondary" name="btnmodificar">
        </form>
    </div>
    <div class="col-4 col-md-5"></div>
</div>

<?php
include("fragmentos/footer.php");
?>
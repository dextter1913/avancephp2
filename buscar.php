<?php
include("fragmentos/header.php");
include("clases/conexionOpen.php");
?>

<div class="row">
    <div class="col-4 col-md-4"></div>
    <div class="col-4 col-md-4">

    <?php 
        $_id = $_POST['buscar'];

        $_buscar = mysqli_query($conexion, "SELECT * FROM portatil WHERE marca_por LIKE '$_id%'");
        $consulta = mysqli_fetch_array($_buscar);

    ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Calidad</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $consulta['id_por'];?></td>
                    <td><?php echo $consulta['marca_por'];?></td>
                    <td><?php echo $consulta['calidad_por'];?></td>
                    <td><?php echo $consulta['valor_por'];?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-4 col-md-4"></div>
</div>


<?php include("fragmentos/footer.php"); ?>
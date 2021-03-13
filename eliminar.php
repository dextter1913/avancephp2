<?php 
    $_id = $_GET['id'];
    
    include("clases/conexionOpen.php");
    $query = "DELETE FROM $tb1 WHERE id_por = '$_id'";
    $registro = mysqli_query($conexion, $query);
    header("location:index.php");
?>
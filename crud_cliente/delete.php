<?php

include("conexion.php");
$con=conectar();

$IDempleado=$_GET['id'];

$sql="DELETE FROM cliente  WHERE IDcliente='$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
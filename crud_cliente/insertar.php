<?php
include("conexion.php");
$con=conectar();

$IDempleado=$_POST['IDcliente'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Numero_tel=$_POST['Numero_tel'];
$Email=$_POST['E-mail'];
$Fecha_pedido=$_POST['Fecha_pedido'];
$Medicamento=$_POST['Medicamento'];


$sql="INSERT INTO cliente VALUES('$IDcliente','$Nombre','$Apellido','$Numero_tel','$Email','$Fecha_pedido','$Medicamento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

$IDempleado=$_POST['idempleado'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Numero_tel=$_POST['Numero_tel'];
$Fecha_nacimiento=$_POST['Fecha_nacimiento'];
$Email=$_POST['E-mail'];
$domicilio=$_POST['Domicilio'];


$sql="INSERT INTO empleado VALUES('$IDempleado','$Nombre','$Apellido','$Numero_tel','$Fecha_nacimiento','$Email','$Domicilio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>
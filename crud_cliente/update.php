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

$sql="UPDATE empleado SET  Nombre='$Nombre',Apellido='$Apellido',Numero_tel='$Numero_tel',E-mail='$Email',Fecha_pedido='$Fecha_pedido' ,Medicamento='$Medicamento' WHERE IDcliente='$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>
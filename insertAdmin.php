<?php 
include("conexion.php");
$dniAdmin=$_POST['dniAdmin'];
$nombre=$_POST['nombre'];
$psw=$_POST['psw'];
$sql= "INSERT INTO admin(dniAdmin, nombre, psw)VALUES('$dniAdmin', '$nombre', '$psw')";
if(mysqli_query($conexion,$sql)){
	header("location:ver_Admins.php");
	}else{
		echo "Algo salio mal";
	}
 ?>
<?php 
include("conexion.php");
$dni=$_POST['dniAdmin'];
$sql="DELETE FROM admin WHERE dniAdmin='$dni'";
if (mysqli_query($conexion,$sql)) {
	header("location:ver_admins.php");
} else {
	echo "algo salio mal";
}

 ?>
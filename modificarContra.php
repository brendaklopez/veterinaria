<?php
include("conexion.php");
$dni=$_POST['dniAdmin'];
$pswNew=$_POST['psw'];
$sql="UPDATE admin SET psw ='$pswNew' WHERE dniAdmin ='$dni'";
if (mysqli_query($conexion,$sql)) {
	header("location:accesoAdmin.htm");# code...
} else {
	echo "algo salio mal";
}


 ?>
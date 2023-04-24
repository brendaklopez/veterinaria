<?php 
include("conexion.php");
$nombre=$_POST['nombre'];
$psw=$_POST['psw'];
$sql="SELECT * FROM admin WHERE nombre='$nombre' AND psw='$psw'";
$consulta=mysqli_query($conexion,$sql);
$existe=mysqli_num_rows($consulta);
if ($existe==1) {
	session_start();
	$_SESSION['usuario']="x";
	$_COOKIE['nombre'];
	setcookie("nombre",$nombre);
	header("location:index.php");
	
} else {
	header("location:accesoAdmin.htm");
}

 ?>
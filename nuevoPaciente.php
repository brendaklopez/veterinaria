<?php 
include("conexion.php");
$dniD=$_POST['dniD'];
$nombred=$_POST['nombred'];
$nombrep=$_POST['nombrep'];
$domicilio=$_POST['domicilio'];
$sexop=$_POST['sexop'];
$tipop=$_POST['tipop']; 
$castrado=$_POST['castrado'];
$anioNac=$_POST['anioNac']; 
$sql="INSERT INTO pacientes(id, dniD,nombred,nombrep,domicilio, sexop,tipop,castrado,anioNac) VALUES(0,'$dniD','$nombred','$nombrep','$domicilio','$sexop','$tipop','$castrado','$anioNac')";
if (mysqli_query($conexion,$sql)) {
	header("location:ver_pacientes.php");
	}else{
	echo "algo salio mal";
}

 ?>
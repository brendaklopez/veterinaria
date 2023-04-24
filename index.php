
<?php 
session_start();
if (isset($_SESSION['usuario'])) {
	header("location:index3.php");
	} 

else {
	header("location:accesoAdmin.htm");
}
 ?>
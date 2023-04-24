<?php 
session_start();
session_destroy();
setcookie("nombre", "");
echo "sesion cerrada";

 ?>
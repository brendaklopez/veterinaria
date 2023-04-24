<?php 
include("conexion.php");
$sql="SELECT * FROM pacientes";
$consulta=mysqli_query($conexion,$sql);
echo "<H1>PACINETES REGISTRADOS</H1>";
echo "<table border=1 aling=center>";
while ($registro=mysqli_fetch_row($consulta)) {
    echo"<tr>";
    foreach ($registro as $r) {
        echo "<td>$r</td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "<a href='nuevoPaciente.htm'>Agregar Nuevo Paciente</a>";
echo "<br>";
echo "<a href='index.php'>Volver al inicio</a>"

 ?>
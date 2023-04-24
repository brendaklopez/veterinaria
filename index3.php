	<html>
	<body>
		<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Francois+One&family=Roboto:wght@700&display=swap" rel="stylesheet">
		</head>
		<header>
			<H1>SISTEMA DE VETERINARIA</H1>
		</header>

 	<h2><?php 
session_start();
echo "Hola, ".$_COOKIE['nombre'];
 ?></h2>

		<section class="botones">
		<ul> 
			<li>
				<div class="boton">
				<a href="ver_pacientes.php" class="button">
				<img src="pic/paciente.jpg">
				<p>PACIENTES</p></a>
				</div>
			</li>

			<li>
				<div class="boton">
				<a href="ver_admins.php" class="button">
				<img src="pic/usuario.jpg">
				<p>USUARIOS</p></a>
				</div>
			</li>
		</ul>
		<ul>
			<li>
				<div class="boton">
				<a href="modicarContra.htm"class="button">
				<img src="pic/modif.jpg">
				<p>MODIFICAR 
					<br>
				CONTRASEÑA</p></a>
				</div>
			</li>

			<li>
				<div class="boton">
				<a href="cerrarsesion.php"class="button">
				<img src="pic/salir.jpg"><p>CERRAR
				<br>
				 SESION</p></a>
				</div>
			</li>
		</ul>
		</section> 
	
</body>
</html>

<style>
	header {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 0px;
}
	.botones ul {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 0;
    padding: 0;
}
	.botones li {
    margin: 0 20px 40px;
    max-width: 300px;
    font-family: arial;
}
	.botones img {
    display: block;
    margin: 0 auto 10px;
    width: 150px;
    height: 150px;
    object-fit: cover;
}
	.boton{
    background-color: #9704AA;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
    font-weight: bold;
	font-family: arial;
	font-size: 20px;

	}
	.button{
	padding: 70px 250px;
	text-decoration: none;	
	color: white;
	}
	
</style>
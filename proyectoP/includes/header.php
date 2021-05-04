<?php 
	$Nusuario = 'nombre de usuario';
	require_once("conexion.php");
	require_once("funciones.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Plataforma de Datos</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="icon" href="./img/icono.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/31d01ba606.js" crossorigin="anonymous"></script>
	<style>
		body{
			background-image: url(img/fondo.png);
		}
	</style>
</head>
	<body>
	<header>
		<div class="principal">
			<div class="container">
				<div class="row">
					<div class="navbar col-12">
						<img src="./img/Logo.png" width="70px" height="70px" alt="">
						<h2 class="nombreE">Nombre Plataforma</h2>
						<ul>
							<li><a class="btn" href="entrada.php?nUsuario=nombreUsuario">Inicio</a></li>
							<li><a class="btn" href="consulta.php">Consulta</a></li>
							<li><a class="btn" href="registroN.php">Registro</a></li>
						</ul>
						<a href="" class="btn btnSalir">Salir</a>
						</div>
					</div>
			</div>
		</div>	
	</header>
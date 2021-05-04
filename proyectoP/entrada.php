<!-- Incluimos los archivos correspondientes al Header y la conexion a la base de Datos -->
<?php require_once("includes/conexion.php") ?>
<?php require_once("includes/header.php") ?>
	<div class="contendorPrincipal">
		
	<div class="container">
		<div class="row">
			<div class="col-12 textoT">
				<!-- Mostramos el nombre de usuario obtenido del formulario de registro -->
				<h1>Bienvenido, <?=$Nusuario?></h1>
			</div>
		</div>
	</div>
	<!-- Mostramos las acciones que podemos llecar a cabo en la plataforma -->
		<div class="container principal">
			<div class="row contProc">
				<div class="col-6 cBoton">
					<a href="registroN.php" class="btn btn-Registro a">
						<img src="img/registro.png" class="imgP" alt="">
						Registrar
				</a>
				</div>
				<div class="col-6 cBoton">
					<a href="consulta.php" class="btn btn-consulta b" class="imgP" >
					<img src="img/consulta.png" alt="">
					Consultar</a>
				</div>
			</div>
		</div>
	</div>
	<!-- Importamos el archivo del footer -->
	<?php 
	require_once("includes/footer.php")
	 ?>
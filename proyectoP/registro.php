<!-- Importamos los archivos necesarios -->
<?php 
require_once("includes/header.php");
/*Obtenemos el registro de la matricula seleccionada y lo convertimos en arreglo*/
$matricula= $_GET["matriculaR"];
$registro = consultaRegistro($conexion,$matricula);
$datos= array();
$datos = mysqli_fetch_assoc($registro);
 ?>
<div class="contendorPrincipal">
		
	<div class="container">
		<div class="row">
			<div class="col-12 textoT">
				<h2>Informacion del Usuario</h2>
			</div>
		</div>
	</div>
		<div class="container prin
		<!-- Mostramos la informacion de cada columna del registro -->cipal my-5 text-light text-center">
			<div class="row my-5">
				<div class="col-4 ">
					<img src="img/perfil.jpg" whidth="350px" height="350px" class="m-4 rounded"alt="">
				</div>
				<div class="col-6 p-3 m-4 my-5">
					<h2 class="m-4">Nombre</h2>
					<p class="m-4"> <?=$datos['Nombres']." ".$datos["Paterno"]." ".$datos["Materno"]?></p>
					<h2 class="m-4">Matricula</h2>
					<p class="m-4"><?=$datos['Matricula']?></p>
				</div>
			</div>
			<!-- Mostramos la informacion de cada columna del registro -->
			<div class="row my-5">
				<div class="col-4">
					<h2>Edad</h2>
					<?php if ($datos['edad']>1): ?>
						<p><?=$datos['edad']?> año</p>
						<?php else: ?>
						<p><?=$datos['edad']?> años</p>
					<?php endif; ?>
				</div>
				<div class="col-4">
					<h2>Lugar de Nacimiento</h2>
					<p><?=$datos['Lnacimiento']?></p>
				</div>
				<div class="col-4">
					<h2>Nacionalidad</h2>
					<p><?=$datos['Nacionalidad']?></p>
				</div>
			</div>
			<!-- Mostramos la informacion de cada columna del registro -->
			<div class="row my-5">
				<div class="col-6">
					<h2>Fecha de Nacimiento</h2>
					<p><?=$datos['FechaNac']?></p>
				</div>
				<div class="col-6">
					<h2>Sexo</h2>
					<?php if ($datos['Sexo'] =='F'): ?>
						<p>Femenino</p>
						<?php else: ?>
						<p>Masculino</p>
					<?php endif; ?>
				</div>
			</div>
			<!-- Mostramos botones para modificar el arreglo o regresar a la pantalla de la consulta -->
			<div class="row my-5">
				<div class="col my-3">
					<a href="modifica.php?matricula=<?=$datos['Matricula']?>" class="btn btn-lg btn-dark">Modificar Registro</a>
				</div>
				<div class="col my-3">
					<a href="consulta.php" class="btn btn-lg btn-danger">Regresar</a>
				</div>
			</div>
		</div>
	</div>
 
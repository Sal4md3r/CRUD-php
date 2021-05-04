<!-- Importamos archivos necesarios  -->
<?php 
	require_once("includes/header.php");
	/*Recuperamos la matricula del registro a modificar y obtenemos sus datos*/
	$matricula= $_GET["matricula"];
	$registro = consultaRegistro($conexion,$matricula);
	$datos= array();
	/*Convertimos la consulta en un arreglo*/
	$datos = mysqli_fetch_assoc($registro);
 ?>
<div class="contendorPrincipal">
		
	<div class="container">
		<div class="row">
			<div class="col-12 textoT">
				<h2>Actualiza la informacion deseada</h2>
			</div>
		</div>
	</div>
		<div class="container principal my-5">
			<!-- Formulario para actualizar la informacion del registro -->
			<form action="includes/actualiza.php" class="formDatos" method="POST">
				<div class="row">
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="nombre" class="form-label text-light ">Nombre(s)</label>
							<input class="form-control" type="text" name="nombre" placeholder="Nombre"  value="<?=$datos['Nombres']?>" required>
					</div>
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="paterno" class="form-label text-light">Apellido Paterno</label>
							<input class="form-control" type="text" name="paterno" placeholder="Apellido paterno" value="<?=$datos['Paterno']?>" required>
					</div>
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="materno" class="form-label text-light">Apellido Materno</label>
							<input class="form-control" type="text" name="materno" placeholder="Apellido Materno" value="<?=$datos['Materno']?>" required>
					</div>
				</div>
				<div class="row">
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="matricula" class="form-label text-light">Matricula</label>
							<input class="form-control" type="text" name="matricula" placeholder="Matricula" readonly value="<?=$datos['Matricula']?>" required>
					</div>
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="situacion" class="text-light form-label px-5 mx-2">
							Situacion
						</label>
						<select class="form-select p-2 px-5" name="situacion">
							<?php if ($datos['situacion']=="A"): ?>	
						  	<option value="A" selected>A-Activo</option>
						  	<option value="B" >B-Baja</option>
							<?php else: ?>
							<option value="A">A-Activo</option>
						  <option value="B" selected>B-Baja</option>
						<?php endif; ?>
						</select>
					</div>
					<!-- Inputs cargados con la informacion obtenida del registro y contenida en el arreglo -->
					<div class="col-4 text-center my-4">
						<label for="edad" class="form-label text-light">Edad</label>
						<input type="text" class="form-control" name="edad" placeholder="Ex: 14" value="<?=$datos['edad']?>" required>
					</div>
				</div>
				<div class="row">
					<div class="col text-center my-3">
						<input type="submit" class="btn btn-dark btn-lg" value="Actualizar">
					</div>
				</div>
			</form>
		</div>
	</div>


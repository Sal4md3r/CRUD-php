<!-- Importar archivos necesarios -->
<?php 
	require 'includes/header.php';
 ?>
	<div class="contendorPrincipal">
		
	<div class="container">
		<div class="row">
			<div class="col-12 textoT">
				<h2>Ingresa la informacion requerida</h2>
			</div>
		</div>
	</div>
		<div class="container principal my-5">
			<!-- Formulario para registrar un nuevo usuario -->
			<form action="includes/registrar.php" class="formDatos" method="POST">
				<div class="row">
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="nombre" class="form-label text-light ">Ingrese su nombre</label>
							<input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="paterno" class="form-label text-light">Ingrese su apellido paterno</label>
							<input class="form-control" type="text" name="paterno" placeholder="Apellido paterno" required>
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="materno" class="form-label text-light">Ingrese su apellido materno</label>
							<input class="form-control" type="text" name="materno" placeholder="Apellido Materno" required>
					</div>
				</div>
				<div class="row">
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="matricula" class="form-label text-light ">Ingrese la matricula</label>
							<input class="form-control" type="text" name="matricula" placeholder="Matricula" maxlength="7" required>
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">

						<label for="nacionalidad" class="text-light form-label px-4">Escriba su nacionalidad
						</label>
						<input type="text" class="form-control" name="nacionalidad" placeholder="Nacionalidad">
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="edad" class="form-label text-light">Ingrese su edad</label>
						<input type="text" class="form-control" name="edad" placeholder="Ex: 14" required>
					</div>
				</div>
				<div class="row">
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="lNacimiento" class="form-label text-light ">Ingrese su lugar de nacimiento</label>
							<input class="form-control" type="text" name="lNacimiento" placeholder="Lugar de nacimiento" required>
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="situacion" class="text-light form-label px-4">Seleccione su situacion
						</label>
						<select class="form-select p-2 px-5" name="situacion" required>
						  <option value="A">A-Activo</option>
						  <option value="B">B-Baja</option>
						</select>
						
					</div>
					<!-- Inputs para ingresar la nueva informacion -->
					<div class="col-4 text-center my-4">
						<label for="sexo" class="form-label text-light px-4">Seleccione su sexo</label>
						<select class="form-select p-2 px-5" name="sexo" required>
						  <option value="F">F-Femenino</option>
						  <option value="M">M-Masculino</option>
						</select>
					</div>
				</div>
				<!-- Enviar la informacion -->
				<div class="row">
					<div class="col text-center my-3">
						<input type="submit" class="btn btn-dark btn-lg" value="Registrar">
					</div>
				</div>
			</form>
		</div>
	</div>

<!-- Incluimos el header -->
<?php 
require_once("includes/header.php");

 ?>
<div class="contendorPrincipal">
		
	<div class="container">
		<div class="row">
			<div class="col-12 textoT">
				<h1>Bienvenido, <?=$Nusuario?></h1>
			</div>
		</div>
	</div>
		<div class="container principal ">
			<div class="row contProc">
				<div class="col-8 mx-auto text-center">	
					<!-- Formulario para poder buscar la matricula en la base de datos -->
					<form action="consulta.php" method="GET">
						<div class="mb-3">	
							<label for="matriculaB" class="form-label text-light">Ingresa la matricula a buscar</label>
							<input type="text" class="form-control"name="matriculaB" placeholder="Ex:AS10341" maxlength="7" required>
						</div>		
						<div>
							<input class="btn btn-dark" type="submit" value="Enviar">
						</div>
						</form>
				</div>
			</div>
			<!-- Mensajes de alerta  -->
			<div class="row">	
				<?php if (isset($_GET['error'])): ?>
					<div class="col-6 mt-0 mb-3 mx-auto">
						<div class="alert alert-danger border" role="alert">
  							Ha ocurrido un error
						</div>
					</div>	
				<?php endif ?>
				<!-- Mensajes de alerta  -->
				<?php if (isset($_GET['error'])&&$_GET["error"] == "borrado"): ?>
					<div class="col-6 mt-0 mb-3 mx-auto">
						<div class="alert alert-danger border" role="alert">
  							Ha ocurrido un error al borrar el registro.
						</div>
					</div>	
				<?php endif ?>
				<!-- Mensajes de alerta  -->
				<?php if (isset($_GET['actualiza'])): ?>
					<div class="col-6 mt-0 mb-3 mx-auto">
						<div class="alert alert-success border" role="alert">
  							Se ha actualizado correctamente el registro con matricula : <?=$_GET['actualiza']?>.
						</div>
					</div>
				<?php endif; ?>
				<!-- Mensajes de alerta  -->
				<?php if (isset($_GET['registro'])): ?>
					<div class="col-6 mt-0 mb-3 mx-auto">
						<div class="alert alert-success border" role="alert">
  							Se ha insertado correctamente el registro con matricula : <?=$_GET['registro']?>.
						</div>
					</div>
				<?php endif; ?>
				<!-- Mensajes de alerta  -->
				<?php if (isset($_GET['borrado'])): ?>
					<div class="col-6 mt-0 mb-3 mx-auto">
						<div class="alert alert-success border" role="alert">
  							El registro con matricula : <?=$_GET['borrado']?> ha sido borrado exitosamente.
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Mostramos los registros obtenidos despues de la consulta  -->
	<?php if (isset($_GET['matriculaB'])): ?>
		<?php 
		/*Usamos la funcion consultaMatricula para obtener los registros*/
			$registros= consultaMatricula($conexion,$_GET["matriculaB"]);
			$numRegistro=1;
		 ?>
		<div class="container contenedorTabla mt-1 text-center">
			<!-- Comprobamos la existencia de registros -->
			 <?php if (!empty($registros)): ?>
				<table class="table table-bordered table-dark">
					  <thead class="titulos">
					    <tr>
					      <th scope="col"># de Registro</th>
					      <th scope="col">Matricula</th>
					      <th scope="col">Nombre</th>
					      <th scope="col">Apellidos</th>
					       <th scope="col">Situacion</th>
					        <th scope="col"></th>
					         <th scope="col"></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<!-- Convertimos cada registro en un arreglo  -->
					   	<?php while($registro = mysqli_fetch_assoc($registros)):?>
					   		<?php  
					   			/* var_dump($registro);
					   			die;*/
					   		?>
					   		<!-- Mostramos los datos del registro en forma de tabla -->
					   		<?php if ($numRegistro%2==0): ?>
						   		<tr class="textoFila">
									<th scope="row" class="text-center"><?=$numRegistro?></th>
									<td><?=$registro['matricula']?></td>
									<td><?=$registro['nombres']?></td>
									<td><?=$registro['Apellidos']?></td>
									<td><?=$registro['situacion']?></td>
									<!-- Agregamos botones para vizualizar el registro individual y para eliminarlo -->
									<td class="colBtn"><a href="registro.php?matriculaR=<?=$registro['matricula']?>"class="btn btn-consulta">Consultar</a></td>
									<td class="colBtn"><a href="includes/elimina.php?matriculaB=<?=$registro['matricula']?>"class="btn btn-elimina">Eliminar</a></td>
								</tr>
								<?php $numRegistro++?>
					   		<?php else:?>
					   			<!-- Mostramos los datos del registro en forma de tabla -->
						   		<tr class="textoSec">
									<th scope="row" class="text-center"><?=$numRegistro?></th>
									<td><?=$registro['matricula']?></td>
									<td><?=$registro['nombres']?></td>
									<td><?=$registro['Apellidos']?></td>
									<td><?=$registro['situacion']?></td>
									<!-- Agregamos botones para vizualizar el registro individual y para eliminarlo -->
									<td class="colBtn"><a href="registro.php?matriculaR=<?=$registro['matricula']?>"class="btn btn-consulta">Consultar</a></td>
									<td class="colBtn"><a href="includes/elimina.php?matriculaB=<?=$registro['matricula']?>"class="btn btn-elimina">Eliminar</a></td>
								</tr>
								<?php $numRegistro++?>
							<?php endif;?>
						<?php endwhile;?>
					  </tbody>
				</table>
				<!-- En caso de no haber registros con la matricula damos la opcion para crearlo en ese momento -->
			 <?php else: ?>
			 		<h2 class="mb-3">No hay registros para mostrar</h2>
			 		<h3 class="mb-3">¿Desea crear el registro?</h3>
			 		<a href="registroN.php" class="btn btn-consulta">Crear Registro</a>
			 <?php endif; ?>
		</div>	
		<?php endif ?>

 	

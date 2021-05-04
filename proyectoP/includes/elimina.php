<?php 
	//Importamos la conexion a la base de datos
	require_once('conexion.php');
	//Comprobamos que nos mandan informacion
	if (isset($_GET['matriculaB'])) {
		//Obtenemos y guardamos la matricula
		$registroBorrar = $_GET['matriculaB'];
		//Establecemos nuestra consulta sql
		$query = "DELETE FROM dPersonal WHERE Matricula = '$registroBorrar'";
		//Ejecutamos la consulta
		$sql= mysqli_query($conexion,$query);
		//Si la consulta es valida redirigimos con mensaje exitoso
		if ($sql) {
			header("Location:../consulta.php?borrado=$registroBorrar");
		}else{
			//Si la consulta sale mal redirigimos con un error
			header("Location:../consulta.php?error=borrado");
		}
	}
 ?>
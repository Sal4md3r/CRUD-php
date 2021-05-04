<?php 
/*Importar conexion a base de datos*/
	require_once("conexion.php");
/*Comprobar envio de la informacion*/
	if (isset($_POST)) {
		/*Comprobamos el formato de la informacion y la guardamos en variables*/
		$matricula =mysqli_real_escape_string($conexion,strtoupper( $_POST["matricula"]));
		$nombres = mysqli_real_escape_string($conexion,strtoupper( $_POST["nombre"]));
		$paterno = mysqli_real_escape_string($conexion,strtoupper( $_POST["paterno"]));
		$materno = mysqli_real_escape_string($conexion,strtoupper( $_POST["materno"]));
		$situacion = mysqli_real_escape_string($conexion,strtoupper( $_POST["situacion"]));
		$edad = (float)$_POST['edad'];
		/*Establecemos la consulta que se va a ejecutar*/
		$query = "UPDATE dpersonal SET nombres='$nombres', Paterno='$paterno',Materno='$materno', situacion ='$situacion',edad ='$edad' WHERE Matricula like '$matricula'";
		/*Ejecutamos la consulta*/
		$sql= mysqli_query($conexion,$query);
		/*Comprobamos que la consulta no tuvo errores*/
		if ($sql) {
			//Redirigimos a la pantalla de consulta con un mensaje valido
			header("Location:../consulta.php?actualiza=$matricula");
		}else{
			//Redirigimos a la pantalla de consulta con un mensaje de error
			header("Location:modifica.php?errorDatos=true");
		}

	}else{
		//Redirigimos a la pantalla de consulta con un mensaje de error
		header("Location:modifica.php?errorDatos=true");
	}
 ?>
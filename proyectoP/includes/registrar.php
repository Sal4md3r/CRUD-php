<?php 
	//Importar conexion a Base de Datos
	require_once("conexion.php");
	//Verificar que llega informacion
	if (isset($_POST)) {
		//Obtenemos la matricula para verificar su existencia
		$matriculaN=  mysqli_real_escape_string($conexion,strtoupper($_POST['matricula']));
		//Preparamos nuestra consulta y la ejecutamos
		$query = "SELECT Matricula FROM dpersonal";
		$matriculasReg= mysqli_query($conexion, $query);
		$matExiste=false;
		//Con un ciclo buscamos la matricula para evitar duplicados
		while ($matriculaComparar = mysqli_fetch_assoc($matriculasReg)) {
			if ($matriculaComparar['Matricula']!= $matriculaN) {
				$matExiste=false;
			}
			else{
				$matExiste=true;
				break;
			}
		}
		//Si la matricula no existe procedemos con el registro
		if ($matExiste == false) {
			//Damos formato y obtenemos la informacion del arreglo enviado
			$nombre= mysqli_real_escape_string($conexion,strtoupper($_POST['nombre']));
			$paterno= mysqli_real_escape_string($conexion,strtoupper($_POST['paterno']));
			$materno= mysqli_real_escape_string($conexion,strtoupper($_POST['materno']));
			$situacion= mysqli_real_escape_string($conexion,strtoupper($_POST['situacion']));
			$edad=(float) $_POST['edad'];
			$lNacimiento=mysqli_real_escape_string($conexion,strtoupper($_POST['lNacimiento']));
			$nacionalidad=mysqli_real_escape_string($conexion,strtoupper($_POST['nacionalidad']));
			$sexo=mysqli_real_escape_string($conexion,strtoupper($_POST['sexo']));

			//Preparamos nuestra consulta y la ejecutamos
			$query="INSERT INTO dPersonal (Matricula,situacion,Paterno,Materno,Nombres,edad,Lnacimiento,Nacionalidad,Sexo) VALUES ('$matriculaN','$situacion','$paterno','$materno','$nombre','$edad','$lNacimiento','$nacionalidad','$sexo')";
			$sql= mysqli_query($conexion,$query);
			//Si la consulta funciona redirigimos a la pagina de consulta con un mensaje y la matricula registrada
			if ($sql) {
				header("Location:../consulta.php?registro=$matriculaN");
			}
			//Si no enviamos una alerta de error
		}else{
			header("Location:../registroN?errorR=Matricula");
		}
	}


 ?>
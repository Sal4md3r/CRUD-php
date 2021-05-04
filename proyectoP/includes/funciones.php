<?php 
//Importamos conexion a base de Datos
require_once("conexion.php");
//Funcion para obtener los registros de una tabla
function consultaMatricula($conexion,$matricula){
	$query = "SELECT matricula,nombres,CONCAT(paterno,' ',materno) AS Apellidos,situacion FROM dpersonal WHERE matricula like '%$matricula%'";
	$registros = mysqli_query($conexion,$query);
	$resultado = array();
	if ($registros &&	mysqli_num_rows($registros)>=1) {
		$resultado=$registros;
	}
	return $resultado;
}
//funcion para obtener un registro de una tabla
function consultaRegistro($conexion,$matricula){
	$query = "SELECT *  FROM dpersonal WHERE matricula like '$matricula'";
	$registros = mysqli_query($conexion,$query);
	$resultado = array();
	if ($registros &&	mysqli_num_rows($registros)>=1) {
		$resultado=$registros;
	}
	return $resultado;
}

 ?>
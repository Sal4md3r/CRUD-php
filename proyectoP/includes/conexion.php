<?php 
	$host ='localhost';
	$user = 'elias';
	$password= '';
	$database= 'datosmariadb';
	//Creamos la conexion a la base de datos
	$conexion = mysqli_connect($host,$user,$password,$database);
	//Establecemos el formato como UTF8
	mysqli_query($conexion,"SET NAMES 'UTF8'");

 ?>
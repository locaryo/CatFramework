<?php

/*
	Clase Conexion, esta clase maneja la conexion que se realiza a la base de datos mediante PDO
*/
class Conexion
{
	private $conexion;
	
	function __construct()
	{
		
			if ($this->conexion = new mysqli("localhost", "admin", "26671559", "BeeApp")) {
				//echo "Conectado";
			}else{
				 die('Error de Conexión (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
			}
		
		
	}

	public function conectado()
	{
		return $this->conexion;
	}
}
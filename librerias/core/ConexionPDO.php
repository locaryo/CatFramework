<?php

/**
 * Dririgirse a la carpeta configuracion para modificar las credenciales y datos de la DB.
 *
 */
class ConexionPDO
{
	protected $conn;
	
	public function __construct()
	{
		$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
		$usuario = DB_USER;
		$contraseña = DB_PASSWORD;

		try {
		    $this->conn = new PDO($dsn, $usuario, $contraseña);
		} catch (PDOException $e) {
		    echo 'Falló la conexión: ' . $e->getMessage();
		}
	}
}
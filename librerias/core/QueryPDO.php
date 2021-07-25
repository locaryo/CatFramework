<?php

class QueryPDO extends ConexionPDO
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function insertar($tabla, $array, $value)
	{
		$holders = implode(',', array_fill(0, count($array), '?'));
		$section = implode(',',$array);
		/*$a = $array;
		$count = count($a);
		for ($i=0; $i < $count; $i++) { 
			$b .= '?'.',';    
		}
		$c = trim($b,',');*/
		print_r(array_values($value));
		$sentencia = $this->conn->prepare("INSERT INTO ".$tabla." (".$section.") VALUES (".$holders.")");
		var_dump($sentencia->execute($value));
		print_r($sentencia);
		if ($sentencia->execute($value)) {
			echo "Registrado";
			return TRUE;
		}else{
			echo "Error";
			return FALSE;
		}	
	}

	public function seleccionar($tabla, $nombre_key, $key)
	{
		$sentencia = $this->conn->prepare("SELECT * FROM ".$tabla." WHERE ".$nombre_key."= ?");
		$sentencia->execute(array($key));
		$return = $sentencia->fetch(PDO::FETCH_ASSOC);
		if ($return == TRUE) {
			return $return;
		}else{
			return FALSE;			
		}
	}

	public function seleccionar_todo($tabla)
	{
		
		$result = $this->conn->prepare("SELECT * FROM ".$tabla);
		$result->execute();
		$return = $result->fetchAll(PDO::FETCH_ASSOC);
		if ($return == TRUE) {
			return $return;
		}else{
			return FALSE;
		}
	}

	public function actualizar($strquery, $array)
	{
		/*
		$sentencia = $this->db->prepare($strquery);
		$sentencia->bind_param('',$array);
		if ($sentencia->execute()) {
			return TRUE;
			
		}else{
			return FALSE;
			
		}
		*/
	}

	public function eliminar($tabla, $nombre_key,$key)
	{
		
		$sentencia = $this->db->prepare("DELETE FROM ".$tabla." WHERE ".$nombre_key."= ?");
		$sentencia->execute(array($key));
		if ($sentencia) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
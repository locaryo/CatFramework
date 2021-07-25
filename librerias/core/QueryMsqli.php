<?php

/**
 * 
 */
class Query
{
	private $conn;
	private $db;
	private $query;
	private $arrayValue;
	
	public function __construct()
	{
		$this->conn = new Conexion();
		$this->db = $this->conn->conectado();
	}

	public function insertar($table, $array, $keys)
	{
		/*	
		$sentencia = $this->db->prepare("INSERT INTO ".$table."("implode(',', $array)") VALUES (" );
		$sentencia->bind_param('',$array);
		if ($sentencia->execute()) {
			return TRUE;
			
		}else{
			return FALSE;
			
		}
		*/
		
	}

	public function seleccionar($table, $nid,$id)
	{
		$sentencia = $this->db->query("SELECT * FROM ".$table." WHERE ".$nid."=".$id);
		//$sentencia->execute();
		$return = $sentencia->fetch_array();
		if ($return == TRUE) {
			return $return;
		}else{
			return FALSE;			
		}
		$this->db->close();
	}

	public function seleccionar_todo($table)
	{
		$result = $this->db->query("SELECT * FROM ".$table);
		$return = $result->fetch_all(MYSQLI_ASSOC);
		if ($return == TRUE) {
			return $return;
		}else{
			return FALSE;
			
		}
		$this->db->close();
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

	public function eliminar($table, $nid,$id)
	{
		$sentencia = $this->db->query("DELETE FROM ".$table." WHERE ".$nid."=".$id);
		if ($sentencia) {
			return TRUE;
		}else{
			return FALSE;
		}
		$this->db->close();
	}
}
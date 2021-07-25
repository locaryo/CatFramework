<?php

	$controlador = "controladores/".$controladores.".php";
	if (file_exists($controlador)) {
		require_once($controlador);
		$nuevo_controladores = new $controladores();
		if ($nuevo_controladores) {
			if (method_exists($nuevo_controladores,$metodos)) {
				$nuevo_controladores ->{$metodos}($parametros);
			}else{
				echo "<br>metodo no existe";
			}
		}else{
			echo "<br>No se crea la instacia del controlador";
		}
	}else{
		echo "<br>no existe controlador";
	}
<?php

$controladores = "Welcome";
$metodos = "index";
$parametros = "";

if (isset($_GET['ruta'])) {
	$ruta = $_GET['ruta'];
	$separarurl = explode('/', $ruta);
	if (!empty($separarurl[0])) {
	$controladores = $separarurl[0];
	}

	if (!empty($separarurl[1])) {
		if ($separarurl[1] != "") {
			$metodos = $separarurl[1];
		}
	}

	if (!empty($separarurl[2])) {
		if ($separarurl[2] != "") {
			for ($i=2; $i < count($separarurl); $i++) { 
				$parametros .= $separarurl[$i].',';
			}
			$parametros = trim($parametros,',');
		}
	}
}



<?php

/////// AutoLoad

spl_autoload_register(function($clase) {
	if (file_exists("librerias/core/".$clase.".php")) {
		require_once "librerias/core/".$clase.".php";
	}
});
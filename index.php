<?php

/*
* Realizar cambios podria perjudicar la funcionalidad del framework
* Importante: Crear los "Controladores" con el primer caracter en mayuscula y escribirlo tal cual creado en la barra de
  direcciones. Crear los "Modelos" con el primer caracter en mayuscula y adicionar la palabra "Model" ejemplo: NuevoModelo.php
*/

#############################
# Variables que guardan el SERVIDOR y el NOMBRE de la carpeta del proyecto
#############################
$server = "http://localhost/"; //Servidor por defecto
$carpeta = "CatFramework"; //Nombre de la carpeta del proyecto por defecto

#############################
# Requiriendo arcvhivos necesarios para el funcionamiento del Framework
#############################
require_once"configuracion/Configuracion.php";
require_once"librerias/core/Autoload.php";
require_once"librerias/core/Ruta.php";
require_once"librerias/core/Load.php";

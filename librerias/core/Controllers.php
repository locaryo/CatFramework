<?php

/**
 * 
 */
class Controllers
{
	public $modelo;

	protected function __construct()
	{	
		//
	}

	protected function vista($controlador, $view, $array)
	{
		$controller = get_class($controlador);
		if ($controller == $controller) {
			$view = 'vistas/'.$view.'.php';
		}else{
			$view = 'vistas/'.$controller.'/'.$view.'.php';
		}
		require_once($view);
	}

	public function cargarModel($modelos)
	{
		if (is_array($modelos)) {
			foreach (array($modelos) as $key) {
				for ($i=0; $i < count($key); $i++) { 
					$model = $key[$i].'Model';
					$rutaModelo = array('modelos/'.$model.'.php');
					if (file_exists($rutaModelo)) {
						require_once($rutaModelo);
						$this->modelo = new $model();
					}
				}
				//$model = $key[0].'Model';
			}
		}else{
			$model = $modelos."Model";
			$rutaModelo = 'modelos/'.$model.'.php';
			if (file_exists($rutaModelo)) {
				require_once($rutaModelo);
				$this->modelo = new $model();
			}
		}
	}
}
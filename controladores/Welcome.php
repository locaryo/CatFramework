<?php

/**
 * 
 */
class Welcome extends Controllers
{

	public function __construct()
	{
	}

	public function index()
	{
		$datos=['cabecera' => 'Welcome', 'titulo' => 'CatFramework'];
		$msj=['controladores' => 'controladores', 'modelos' => 'modelos', 'vistas' => 'vistas'];
		$this->vista($this, 'welcome',array('datos' => $datos, 'msj' => $msj));
	}

	public function template($contenido)
	{
			$layouts = array(
			'head' => $this->vista($this, 'template/head'),
			'nav' => $this->vista($this, 'template/nav'),
			'aside' => $this->vista($this, 'template/aside'),
			'vista' => $contenido,
			'footer' => $this->vista($this, 'template/footer')
		);

		$this->vista($this, 'template/cuerpo', array('a' => $layouts));
	}

	public function ingresar()
	{
		$view = $this->vista($this, 'ingresar');
		$this->template($view);
	}
}
<?php 

class View{
	private $_controlador;
	private $_js;

	public function __construct(Request $peticion){
		$this->_controlador = $peticion->getControlador();
		$this->_js = array();
	}

	public function renderizar($vista){
		$rutaView = null;

		$vista = ROOT . 'views'. DS . $this->_controlador . DS . $vista . '.php';
		
		if(file_exists($vista))
			include_once $vista;
		else
			throw new Exception("Error de la vista.");
	}


}


 ?>
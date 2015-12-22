<?php 

class Request{

	private $_controlador;
	private $_metodo;
	private $_argumentos;

	public function __construct(){
		$this->extraerParametros();
		$this->verificarParametros();
	}

	public function getControlador(){
		return $this->_controlador;
	}

	public function getMetodo(){
		return $this->_metodo;
	}

	public function getArgumentos(){
		return $this->_argumentos;
	}

	private function extraerParametros(){
		if(isset($_GET['url'])){
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$url = explode('/', $url);
			$url = array_filter($url);

			$this->_controlador = strtolower(array_shift($url));
			$this->_metodo = strtolower(array_shift($url));
			$this->_argumentos = $url;
		}
	}
}


 ?>
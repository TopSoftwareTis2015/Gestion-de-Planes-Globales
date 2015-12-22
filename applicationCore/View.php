<?php 

class View{
	private $_controlador;
	private $_js;

	public function __construct(Request $peticion){
		$this->_controlador = $peticion->getControlador();
		$this->_js = array();
	}

	public function renderizar($vista, $menu=false){
		$rutaView = null;

		$js = array();

		if(count($this->_js)){
			$js = $this->_js;
		}

		$navbar = ROOT . 'views' . DS . 'layout' . DS . 'default' . DS;

		if(Session::get('autenticado')){
			$navbar = $navbar . 'myNavBar.php';
			$rutaView = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'contenido' . DS . 'contenido.php';
			$areaTrabajo = ROOT . 'views'. DS . $this->_controlador . DS . $vista . '.php';
		}
		else{
			$navbar = $navbar . 'myNavvarLogin.php';
			$rutaView = ROOT . 'views'. DS . $this->_controlador . DS . $vista . '.php';
		}

		if(file_exists($rutaView)){
			include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'layoutPrincipal.php';
		}
		else
			throw new Exception("Error de la vista.");
	}


	public function setJs(array $js){
		if(is_array($js) && count($js)){
			for ($i=0; $i < count($js); $i++) { 
				$this->_js[$i] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
			}
		}
	}
}


 ?>
<?php 

class planGlobalController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function registrar(){//$pagina = false){
		//$pagina = $pagina? $pagina : "";
		$this->_view->renderizar('registrarPG');
	}
}
 ?>
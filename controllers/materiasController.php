<?php 

class materiasController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_view->renderizar('index');
	}

	public function registrar(){
		$this->_view->renderizar('registrar');
	}

	public function editar(){
		$this->_view->renderizar('editar');
	}
}

 ?>
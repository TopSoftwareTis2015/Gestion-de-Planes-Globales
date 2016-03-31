<?php 

class gestorFormulariosController extends Controller{

	public function __construct(){
		parent::__construct();
	}

	public function index(){

	}

	public function nuevoFormato(){
		$this->_view->renderizar('registrarFormato');
	}


}

 ?>
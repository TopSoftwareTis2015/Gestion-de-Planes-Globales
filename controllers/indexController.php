<?php 

class indexController extends Controller{

	public  function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->redireccionar('facultad');
	}

	// private $_facultadDao;

	// public  function __construct(){
	// 	parent::__construct();
	// 	$this->_facultadDao = $this->loadModel('facultad');
	// }

	// public function index(){
	// 	$this->_view->renderizar('index');
	// }
}


 ?>
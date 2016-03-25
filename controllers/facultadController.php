<?php 

class facultadController extends Controller{
	private $_facultadDao;

	public  function __construct(){
		parent::__construct();
		$this->_facultadDao = $this->loadModel('facultad');
	}

	public function index(){
		$this->_view->renderizar('index');
	}

}

 ?>
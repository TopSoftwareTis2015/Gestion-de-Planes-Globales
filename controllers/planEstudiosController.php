<?php 

class planEstudiosController extends Controller{
	private $_planGlobalDao;
	// private $_planEstudioDao;


	public function __construct(){
		parent::__construct();
		$this->_planGlobalDao = $this->loadModel('planGlobal');
		// $this->_planEstudioDao = $this->loadModel('planGlobal');

	}

	public function index(){
		$this->_view->materias = $this->_planGlobalDao->getMateriasGrupos();
		// $this->_view->planEstudio = $this->_planEstudioDao->getMateriasGrupos();
		$this->_view->renderizar('index');
	}

	public function planDeEstudios(){		
		$this->_view->renderizar('planDeEstudios');
	}
}

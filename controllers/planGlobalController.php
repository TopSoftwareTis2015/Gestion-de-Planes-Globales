<?php 

class planGlobalController extends Controller{
	private $_planGlobalDao;

	public function __construct(){
		parent::__construct();
		$this->_materiaDao = $this->loadModel('materias');
		$this->_planGlobalDao = $this->loadModel('planglobal');
		$this->_grupoDao = $this->loadModel('grupo');		
	}

	public function index(){

	}

	// public function registrar(){//$pagina = false){
	// 	//$pagina = $pagina? $pagina : "";
	// 	$this->_view->renderizar('registrarPG');
	// }

	public function registrar($codigo_materia){
		$codigo_materia = $codigo_materia[0];
		$this->_view->materia = $this->_materiaDao->getMateria('codigo_materia',$codigo_materia);
		if(!$this->_view->materia){
			$this->redireccionar('materias');
		}

		if($this->getInt('guardar')==1){

		}

		$this->_view->grupos = $this->_grupoDao->getGruposSinPG($codigo_materia);

		if(!$this->verificarSiArrayExiste($this->_view->grupos)){
			$this->redireccionar('materias');
		}

		$this->_view->docentes = $this->_grupoDao->getDocentesSinPG($codigo_materia);

		$this->_view->renderizar('registrarPG');
	}

	private function verificarSiArrayExiste($array){
		return isset($array) && count($array);
	}
}
 ?>
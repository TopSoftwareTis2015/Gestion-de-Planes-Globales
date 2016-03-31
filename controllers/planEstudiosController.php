<?php 

class planEstudiosController extends Controller{
	private $_planGlobalDao;
	// private $_planEstudioDao;


	public function __construct(){
		parent::__construct();
		// $this->_planGlobalDao = $this->loadModel('planGlobal');
		$this->_planEstudioDao = $this->loadModel('planEstudio');
		$this->_materiaDao = $this->loadModel('materias');
		$this->_grupoDao = $this->loadModel('grupo');



	}

	public function index(){
		// $this->_view->materias = $this->_planGlobalDao->getMateriasGrupos();
		// $this->_view->materias = $this->_planEstudioDao->getMateriasGrupos();

		$this->_view->renderizar('index');
	}

	public function planDeEstudios(){
		// $this->_view->materias = $this->_planGlobalDao->getMateriasGrupos();
		$this->_view->materiasN = $this->_planEstudioDao->getMateriasGrupos();
		
	    		
		$this->_view->renderizar('planDeEstudios');
	}
	

	public function registrar($codigo){
		$codigo_materia = $codigo[0];
		$this->_view->materia = $this->_materiaDao->getMateria('codigo_materia',$codigo_materia);
		if(!$this->_view->materia){
			$this->redireccionar('planEstudios/planDeEstudios');
		}

		if($this->getInt('guardar')==1){
			$this->registrarTablaPlanglobal($codigo_materia);
			
			$id_pg = $this->_planGlobalDao->getId($_POST['codigo_plan_global']);
			$id_pg = $id_pg[0];
			

			$this->registrarGrupos($id_pg, $codigo_materia);

			$this->registrarCargaHoraria($id_pg);

			$this->registrarObjetivos("objetivos_generales", $id_pg, "general");
			$this->registrarObjetivos("objetivos_especificos", $id_pg, "especifico");

			$this->registrarBibliografia($id_pg, "base");
			$this->registrarBibliografia($id_pg, "complementaria");

			$this->registrarUnidades($id_pg);

			$this->registrarSeccionesAdicionales($id_pg);

			if(count($codigo)>1){
				$this->_view->confirmarGuardar = $codigo[1];
			}

		}

		$this->_view->grupos = $this->_grupoDao->getGruposSinPG($codigo_materia);

		if(!$this->verificarSiArrayExiste($this->_view->grupos)){
			$this->redireccionar('materias');
		}

		$this->_view->docentes = $this->_grupoDao->getDocentesSinPG($codigo_materia);

		$this->_view->renderizar('registrarPG');
		// $this->_view->renderizar('vistaPG');

	}

	private function verificarSiArrayExiste($array){
		return isset($array) && count($array);
	}

	// private 

}
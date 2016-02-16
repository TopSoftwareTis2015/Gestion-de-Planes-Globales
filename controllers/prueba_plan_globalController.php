<?php 

class prueba_plan_globalController extends Controller{
	private $_planGlobalDao;

	public function __construct(){
		parent::__construct();
		$this->_planGlobalDao = $this->loadModel('planGlobal');
	}

	public function index($id_plan_global = 1){
		$this->_view->planGlobal = $this->_planGlobalDao->getPlanGlobal($id_plan_global);
		$this->_view->materia = $this->_planGlobalDao->getMateria($id_plan_global);
		$this->_view->grupos = $this->_planGlobalDao->getGrupos($id_plan_global);
		$this->_view->carga_horaria = $this->_planGlobalDao->getCargaHoraria($id_plan_global);
		$this->_view->materias_relacionadas = $this->_planGlobalDao->getMateriasRelacionadas(
			$this->_view->materia['codigo_materia']);
		$this->_view->docentes = $this->_planGlobalDao->getDocentes($id_plan_global);
		$this->_view->objetivosGenerales = $this->_planGlobalDao->getObjetivosGenerales($id_plan_global);
		$this->_view->objetivosEspecificos = $this->_planGlobalDao->getObjetivosEspecificos($id_plan_global);
		$this->_view->unidades = $this->_planGlobalDao->getUnidades($id_plan_global);
		$this->_view->bibliografias = $this->_planGlobalDao->getBibliografias($id_plan_global);
		$this->_view->seccionesAdicionales = $this->_planGlobalDao->getSeccionesAdicionales($id_plan_global);

		$this->_view->renderizar('index');
	}
}



 ?>
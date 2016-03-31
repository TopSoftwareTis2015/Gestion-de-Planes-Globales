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

	public function carreras(){
		
		$this->_view->facultad = $this->_facultadDao->getCarreras();
		
		$this->_view->renderizar('carreras');
	}

	public function verificar($nombre){
		$nombre_carrera = $nombre[0];
		$this->_view->planEstudios = $this->_facultadDao->verificarCarrera($nombre_carrera);
		if(!$this->_view->planEstudios){
			$this->redireccionar('facultad/carreras');

		}


		// $this->_view->grupos = $this->_grupoDao->getGruposSinPG($codigo_materia);

		// if(!$this->verificarSiArrayExiste($this->_view->grupos)){
		// 	$this->redireccionar('facultad/carreras');
		// }

		// $this->_view->docentes = $this->_grupoDao->getDocentesSinPG($codigo_materia);

		$this->_view->renderizar('planEstudios/planEstudios');
		
	}

}

 ?>
		<!--if($this->getInt('guardar')==1){
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

		 } -->
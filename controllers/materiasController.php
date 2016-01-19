<?php 

class materiasController extends Controller{
	private $_materiaDao;

	public  function __construct(){
		parent::__construct();
		$this->_materiaDao = $this->loadModel('materias');
	}

	public function index(){
		$this->_view->materias = $this->_materiaDao->getMaterias();

		$this->_view->renderizar('index');
	}

	public function nuevo(){
		$this->_materiaDao->registrarMateria(
			$this->getTexto('codigo_materia'),
			$this->getTexto('nombre_materia'),
			$this->getTexto('sigla_materia')
			);

		$this->redireccionar('materias');
	}

	public function eliminar($codigo_materia){
		$this->_materiaDao->eliminarMateria($codigo_materia[0]);
		$this->redireccionar('materias');
	}
}


 ?>
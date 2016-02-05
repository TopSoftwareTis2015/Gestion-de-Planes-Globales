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
		if($this->getInt('guardar')==1){
			$this->validarDatosNuevo();
			$this->_materiaDao->registrarMateria(
				$this->getTexto('codigo_materia'),
				$this->getTexto('nombre_materia'),
				$this->getTexto('sigla_materia')
				);

			$this->redireccionar('materias');			
		}
		$this->_view->renderizar("registrar");
	}

	public function eliminar($codigo_materia){
		if(!$this->_materiaDao->getMateria('codigo_materia',$codigo_materia[0])){
			$this->redireccionar('materias');
		}

		$this->_materiaDao->eliminarMateria($codigo_materia[0]);
		$this->redireccionar('materias');
	}

	public function verificar_eliminar($codigo_materia){
		if($this->_materiaDao->obtenerPlanEstudiosVigente($codigo_materia[0])){
			echo 0;
		}
	}

	public function editar($codigo_materia){
		$materiaAnterior = $this->_materiaDao->getMateria('codigo_materia', $codigo_materia[0]);
		if(!$materiaAnterior){
			$this->redireccionar('materias');
		}

		$this->_view->materiaAnterior = $materiaAnterior;

		if($this->getInt('guardar')==1){
			$this->validarDatos($materiaAnterior);

			$this->_materiaDao->editarMateria(
				$this->getTexto('nombre_materia'),
				$this->getTexto('codigo_materia'),
				$this->getTexto('sigla_materia'),
				$codigo_materia[0]
				);
			$this->redireccionar('materias');
		}

		$this->_view->renderizar('editar');
	}

	private function validarDatos($materiaAnterior){
		$materia = $this->_materiaDao->getMateria('codigo_materia', $this->getAlphaNum('codigo_materia'));

		$this->_view->materiaAnterior = $_POST;

		if(($this->getPostParam('codigo_materia') != $materiaAnterior['codigo_materia']) &&
				$this->_materiaDao->getMateria('codigo_materia', $this->getAlphaNum('codigo_materia'))){
			$this->_view->_errorCodigoMateria = 'Este codigo ya esta asignado!';
			$this->_view->renderizar('editar');
			exit;
		}

		if(($this->getPostParam('nombre_materia') != $materiaAnterior['nombre_materia']) &&
				$this->_materiaDao->getMateria('nombre_materia', $this->getTexto('nombre_materia'))){
			$this->_view->_errorNombreMateria = 'Este nombre ya esta asignado!';
			$this->_view->renderizar('editar');
			exit;
		}

		if(($this->getPostParam('sigla_materia') != $materiaAnterior['sigla_materia']) &&
				$this->_materiaDao->getMateria('sigla_materia', $this->getAlphaNum('sigla_materia'))){
			$this->_view->_errorSiglaMateria = 'Esta sigla ya esta asignada!';
			$this->_view->renderizar('editar');
			exit;
		}
	}


	private function validarDatosNuevo(){
		$this->_view->materiaAnterior = $_POST;

		if($this->_materiaDao->getMateria('codigo_materia', $this->getAlphaNum('codigo_materia'))){
			$this->_view->_errorCodigoMateria = 'Este codigo ya esta asignado!';
			$this->_view->renderizar('registrar');
			exit;
		}

		if($this->_materiaDao->getMateria('nombre_materia', $this->getTexto('nombre_materia'))){
			$this->_view->_errorNombreMateria = 'Este nombre ya esta asignado!';
			$this->_view->renderizar('registrar');
			exit;
		}

		if($this->_materiaDao->getMateria('sigla_materia', $this->getAlphaNum('sigla_materia'))){
			$this->_view->_errorSiglaMateria = 'Esta sigla ya esta asignada!';
			$this->_view->renderizar('registrar');
			exit;
		}
	}
}


 ?>
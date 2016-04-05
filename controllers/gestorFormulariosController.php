<?php 

class gestorFormulariosController extends Controller{
	private $_planGlobalDao;
	private $_seccionDao;

	public function __construct(){
		parent::__construct();
		$this->_planGlobalDao = $this->loadModel('planglobal');
		$this->_seccionDao = $this->loadModel('seccion');
	}

	public function index(){

	}

	public function nuevoFormato(){
		if($_POST['guardar'] == 1){
			$this->_planGlobalDao->registrarPGG();
			$id_pg = $this->_planGlobalDao->getIdd();
			$id_pg = $id_pg[0];
			$this->_seccionDao->registrar($id_pg, "datosI");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "justificacion");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "objetivos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "unidades");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "metodologias");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "cronograma");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "criteriosEval");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "bibliografias");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "reglamentos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->_seccionDao->registrar($id_pg, "prerequisitos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion);

			$this->redireccionar("gestorFormularios/mostrarFormato");


		}

		$this->_view->renderizar('registrarFormato');
	}

	private function registrarFormulario($id_elemento){
		$this->_elementoBasicoDao->guardarElementoBasico($id_elemento)
		$id_elemento_basico = $this->_elementoBasicoDao->getIdd();

		$nT = (int)$_POST[$id_elemento."_contadorT"];
		$nIT = (int)$_POST[$id_elemento."_contadorIT"];
		$nID = (int)$_POST[$id_elemento."_contadorID"];
		$nCL = (int)$_POST[$id_elemento."_contadorCL"];
		$nB = (int)$_POST[$id_elemento."_contadorB"];

		$nE = (int)$_POST[$_elemento."_numeroElemento"];

		for ($i=0, $k=1; $i < $nT ; $i++) {
			$bandera = true;
			while($bandera){
				$titulo = $id_elemento."_".$k."T";
				if(isset($_POST[$titulo])){
					$this->registrarElemento($id_elemento_basico, $titulo, "titulo");
					$bandera = false;
				}
				else{
					$k++;
				}
			} 
		}

		for ($i=0, $k=1; $i < $nIT ; $i++) { 
			$bandera = true;
			while($bandera){
				$titulo = $id_elemento."_".$k."IT";
				if(isset($_POST[$titulo])){
					$this->registrarElemento($id_elemento_basico, $titulo, "input");
					$bandera = false;
				}
				else{
					$k++;
				}
			}
		}

		for ($i=0, $k=1; $i < $nID ; $i++) { 
			$bandera = true;
			while($bandera){
				$titulo = $id_elemento."_".$k."ID";
				if(isset($_POST[$titulo])){
					$this->registrarElemento($id_elemento_basico, $titulo, "textArea");
					$bandera = false;
				}
				else{
					$k++;
				}
			}
		}

		for ($i=0, $k=1; $i < $nCL ; $i++) { 
			$bandera = true;
			while($bandera){
				$titulo = $id_elemento."_".$k."B";
				if(isset($_POST[$titulo])){
					$this->registrarElemento($id_elemento_basico, $titulo);
					$bandera = false;
				}
				else{
					$k++;
				}
			}
		}

		for ($i=0, $k=1; $i < $nB ; $i++) { 
			$bandera = true;
			while($bandera){
				$titulo = $id_elemento."_".$k."T";
				if(isset($_POST[$titulo])){
					$this->registrarElemento($id_elemento_basico, $titulo);
					$bandera = false;
				}
				else{
					$k++;
				}
			}
		}
	}

	public function mostrarFormato(){

	}


}

 ?>
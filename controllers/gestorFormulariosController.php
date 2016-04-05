<?php 	

class gestorFormulariosController extends Controller{
	private $_planGlobalDao;
	private $_seccionDao;
	private $_elementoBasicoDao;
	private $_elementoDao;
	private $_elementoListaDao;

	public function __construct(){
		parent::__construct();
		$this->_planGlobalDao = $this->loadModel('planglobal');
		$this->_seccionDao = $this->loadModel('seccion');
		$this->_elementoBasicoDao = $this->loadModel('elementoBasico');
		$this->_elementoDao = $this->loadModel('elemento');
		$this->_elementoListaDao = $this->loadModel('elementoLista');
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
			$this->registrarFormulario($id_seccion, "datosI", 1);

			$this->_seccionDao->registrar($id_pg, "justificacion");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "justificacion", 1);

			$this->_seccionDao->registrar($id_pg, "objetivos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "objetivos", 1);

			$this->_seccionDao->registrar($id_pg, "unidades");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "unidades", 1);

			$this->_seccionDao->registrar($id_pg, "metodologias");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "metodologias", 1);

			$this->_seccionDao->registrar($id_pg, "cronograma");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "cronograma", 1);

			$this->_seccionDao->registrar($id_pg, "criteriosEval");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "criteriosEval", 1);

			$this->_seccionDao->registrar($id_pg, "bibliografias");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "bibliografias", 1);

			$this->_seccionDao->registrar($id_pg, "reglamentos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "reglamentos", 1);

			$this->_seccionDao->registrar($id_pg, "prerequisitos");
			$id_seccion = $this->_seccionDao->getIdd();
			$id_seccion = $id_seccion[0];
			$this->registrarFormulario($id_seccion, "prerequisitos", 1);

			$this->redireccionar("gestorFormularios/mostrarFormato");


		}

		$this->_view->renderizar('registrarFormato');
	}

	private function registrarFormulario2($id_padreBD, $id_padre, $numeroElemento){
		$id_elemento = $id_padre."_".$numeroElemento."CT";
		$nE = (int)$_POST[$id_elemento."_numeroElemento"];
		$this->_elementoListaDao->guardarElemento($id_padreBD, $nE);
		$id_elementoBD = $this->_elementoListaDao->getIdd();

		$idTitulo = $id_elemento."_1T_t";
		$idContainer = $id_elemento."_1T";
		if(isset($_POST[$id_elemento."_1T_t"])){
					$this->_elementoDao->guardarElemento(1, NUll, $_POST[$idTitulo], $_POST[$idContainer."_required"], $_POST[$idContainer."_numeroElemento"]);
		}

		$this->registrarFormulario($id_elementoBD, $id_elemento, $_POST[$id_elemento."_2B_numeroElemento"]);
	}

	private function registrarFormulario($id_padreBD, $id_padre, $numeroElemento){
		$id_elemento = $id_padre."_".$numeroElemento."B";
		$nE = (int)$_POST[$id_elemento."_numeroElemento"];
		$this->_elementoBasicoDao->guardarElementoBasico($id_padreBD, $nE);
		$id_elementoBD = $this->_elementoBasicoDao->getIdd();

		$nT = (int)$_POST[$id_elemento."_contadorT"];
		$nIT = (int)$_POST[$id_elemento."_contadorIT"];
		$nID = (int)$_POST[$id_elemento."_contadorID"];
		$nCL = (int)$_POST[$id_elemento."_contadorCL"];
		$nB = (int)$_POST[$id_elemento."_contadorB"];


		for ($i=0, $k=1; $i < $nT ; $i++) {
			$bandera = true;
			while($bandera){
				$idTitulo = $id_elemento."_".$k."T_t";
				$idContainer = $id_elemento."_".$k."T";
				if(isset($_POST[$idTitulo])){
					$this->_elementoDao->guardarElemento(1,$id_elementoBD, $_POST[$idTitulo], $_POST[$idContainer."_required"], $_POST[$idContainer."_numeroElemento"]);
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
				$idTitulo = $id_elemento."_".$k."IT_tt";
				$idContainer = $id_elemento."_".$k."IT";
				if(isset($_POST[$titulo])){
					$this->_elementoDao->guardarElemento(2,$id_elementoBD, $_POST[$idTitulo], $_POST[$idContainer."_required"], $_POST[$idContainer."_numeroElemento"]);
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
				$idTitulo = $id_elemento."_".$k."ID_td";
				$idContainer = $id_elemento."_".$k."ID";
				if(isset($_POST[$titulo])){
					$this->_elementoDao->guardarElemento(3,$id_elementoBD, $_POST[$idTitulo], $_POST[$idContainer."_required"], $_POST[$idContainer."_numeroElemento"]);
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
				$idTitulo = $id_elemento."_".$k."B";
				if(isset($_POST[$titulo])){
					$this->registrarFormulario($id_elementoBD, $id_elemento, $_POST[$idTitulo."_numeroElemento"]);
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
				$idTitulo = $id_elemento."_".$k."CT";
				if(isset($_POST[$titulo])){
					$this->registrarFormulario2($id_elementoBD, $id_elemento, $_POST[$idTitulo."_numeroElemento"]);
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
<?php 

class planGlobalController extends Controller{
	private $_planGlobalDao;
	private $_grupoDao;
	private $_cargaHorariasDao;
	private $_objetivosDao;
	private $_bibliografiasDao;
	private $_unidadDao;
	private $_capituloDao;
	private $_subtituloDao;
	private $_seccionDao;
	private $_contenidoDao;
	private $_subtituloSeccionDao;

	public function __construct(){
		parent::__construct();
		$this->_materiaDao = $this->loadModel('materias');
		$this->_planGlobalDao = $this->loadModel('planglobal');
		$this->_grupoDao = $this->loadModel('grupo');
		$this->_cargaHorariasDao = $this->loadModel('cargaHorarias');	
		$this->_objetivosDao = $this->loadModel('objetivos');
		$this->_bibliografiasDao = $this->loadModel('bibliografias');
		$this->_unidadDao = $this->loadModel('unidades');
		$this->_capituloDao = $this->loadModel('capitulo');
		$this->_subtituloDao = $this->loadModel('subtitulo');
		$this->_seccionDao = $this->loadModel('secciones_adicionales');
		$this->_contenidoDao = $this->loadModel('contenidos_seccion');
		$this->_subtituloSeccionDao = $this->loadModel('subtitulos_contenido_seccion');
	}

	public function index(){

	}

	public function mostrarPlanGlobal($id_plan_global){
		$id_plan_global = $id_plan_global[0];

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
		$this->_view->bibliografiasBase = $this->_planGlobalDao->getBibliografiasBase($id_plan_global);
		$this->_view->bibliografiasComplementaria = $this->_planGlobalDao->getBibliografiasComplementaria($id_plan_global);
		$this->_view->seccionesAdicionales = $this->_planGlobalDao->getSeccionesAdicionales($id_plan_global);

		//var_dump($this->_view->seccionesAdicionales); exit;

		$this->_view->renderizar('vistaPG');
	}

	public function registrar($codigo){
		$codigo_materia = $codigo[0];
		$this->_view->materia = $this->_materiaDao->getMateria('codigo_materia',$codigo_materia);
		if(!$this->_view->materia){
			$this->redireccionar('materias');
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

			if(count($codigo)==2){
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

	private function registrarTablaPlanglobal($codigo_materia){
		$titulo = $_POST['titulo'];
		$justificacion = $_POST['justificacion'];
		$metodologias = $_POST['metodologias'];
		$criterios_evaluacion = $_POST['criterios_evaluacion'];
		$gestion_pg = $_POST['gestion'] .'-'. $_POST['anio_gestion'];
		$codigo_plan_global = $_POST['codigo_plan_global'];

		$numero_plan_global = $this->getNumeroPlanGlobal($codigo_materia);

		$this->_planGlobalDao->insertarPlanGlobal($titulo, $justificacion, $metodologias, 
			$criterios_evaluacion, $gestion_pg, $codigo_plan_global, $numero_plan_global);
	}

	private function getNumeroPlanGlobal($codigo_materia){
		$numeroActual = $this->_planGlobalDao->getNumeroPlanGlobal($codigo_materia);
		if($numeroActual){
			$numeroActual = $numeroActual[0];
			if($numeroActual){
				$numeroActual = (int)$numeroActual;
				return ++$numeroActual;
			}
			else
				return 1;
		}
		else
			return 1;
	}

	private function registrarGrupos($id_pg, $codigo_materia){
		$grupos = $_POST['grupos_plan_global'];
		for ($i=0; $i < count($grupos); $i++) {
			$itemGrupo = explode('_', $grupos[$i]);
			$id_usuario = $itemGrupo[0];
			$grupo = $itemGrupo[1];
			$this->_planGlobalDao->registrarGrupoPlanGlobal($codigo_materia, $id_usuario, $grupo, $id_pg);
		}
	}

	private function registrarCargaHoraria($id_pg){
		$horas_semestre = $_POST['horas_semestre'];
		$periodos_semana = isset($_POST['periodos_semana'])? $_POST['periodos_semana']:NULL;
		$periodos_teoricos_semana = isset($_POST['periodos_teoricos_semana'])? $_POST['periodos_teoricos_semana']:NULL;
		$periodos_practicos_semana = isset($_POST['periodos_practicos_semana'])? $_POST['periodos_practicos_semana']:NULL;

		$this->_cargaHorariasDao->registrarCargaHoraria($id_pg, $horas_semestre, $periodos_semana,
																$periodos_teoricos_semana, $periodos_practicos_semana);
	}

	private function registrarObjetivos($tabla, $id_pg, $tipo){
		$numeroObjetivo = 1;
		while(isset($_POST['titulo_objetivo'.$numeroObjetivo.'_'.$tipo])){
			$titulo_objetivo = $_POST['titulo_objetivo'.$numeroObjetivo.'_'.$tipo];

			$descripcion_objetivo = isset($_POST['descripcion_objetivo'.$numeroObjetivo.'_'.$tipo])?
																		$_POST['descripcion_objetivo'.$numeroObjetivo.'_'.$tipo]:NULL;

			$this->_objetivosDao->registrarObjetivo($tabla, $id_pg, $titulo_objetivo,
																							$descripcion_objetivo, $numeroObjetivo);

			$numeroObjetivo++;
		}
	}

	private function registrarBibliografia($id_pg, $tipo){
		$numeroBibliografia = 1;
		while(isset($_POST['titulo_bibliografia'.$numeroBibliografia.'_'.$tipo])){
			$titulo_bibliografia = $_POST['titulo_bibliografia'.$numeroBibliografia.'_'.$tipo];
			$autor_bibliografia = $_POST['autor_bibliografia'.$numeroBibliografia.'_'.$tipo];

			$this->_bibliografiasDao->registrarbibliografia($id_pg, $titulo_bibliografia,
																							$autor_bibliografia, $tipo, $numeroBibliografia);
			$numeroBibliografia++;
		}
	}

	private function registrarUnidades($id_pg){
		$numeroUnidad = 1;
		while(isset($_POST['titulo_unidad'.$numeroUnidad])){
			$titulo_unidad = $_POST['titulo_unidad'.$numeroUnidad];
			$objetivo_unidad = isset($_POST['objetivo_unidad'.$numeroUnidad])?
																$_POST['objetivo_unidad'.$numeroUnidad]:NULL;
			$duracion_horas_academicas = $_POST['container_unidad'.$numeroUnidad.'_horas'];
			$duracion_semanas = $_POST['container_unidad'.$numeroUnidad.'_semanas'];

			$this->_unidadDao->registrarUnidad($id_pg, $titulo_unidad, $objetivo_unidad, $numeroUnidad,
																					$duracion_horas_academicas, $duracion_semanas);

			$id_unidad = $this->_unidadDao->getId($id_pg, $numeroUnidad);
			$id_unidad = $id_unidad[0];

			$this->registrarCapitulos($id_pg, $id_unidad, $numeroUnidad);

			$numeroUnidad++;
		}

	}

	private function registrarCapitulos($id_pg, $id_unidad, $numeroUnidad){
		$numeroCapitulo = 1;

		while(isset($_POST['titulo_contenido'.$numeroCapitulo."_unidad".$numeroUnidad])){
			$titulo_capitulo = $_POST['titulo_contenido'.$numeroCapitulo."_unidad".$numeroUnidad];

			$this->_capituloDao->registrarCapitulo($id_pg, $id_unidad, $titulo_capitulo, $numeroCapitulo);
			$id_capitulo = $this->_capituloDao->getId($id_pg, $id_unidad, $numeroCapitulo);
			$id_capitulo = $id_capitulo[0];

			$this->registrarSubtitulos($id_pg, $id_unidad, $id_capitulo, $numeroUnidad, $numeroCapitulo);

			$numeroCapitulo++;
		}
	}

	private function registrarSubtitulos($id_pg, $id_unidad, $id_capitulo, $numeroUnidad, 
																				$numeroCapitulo){
		$numeroSubtitulo = 1;

		while(isset($_POST['subtitulo'.$numeroSubtitulo.'_contenido'.$numeroCapitulo.'_unidad'.
												$numeroUnidad])){
			$subtitulo = $_POST['subtitulo'.$numeroSubtitulo.'_contenido'.$numeroCapitulo.'_unidad'.
												$numeroUnidad];

			$this->_subtituloDao->registrarSubtitulo($id_pg, $id_unidad, $id_capitulo, $subtitulo,
																								$numeroSubtitulo);
			$numeroSubtitulo++;
		}
	}



	private function registrarSeccionesAdicionales($id_pg){
		$numeroSeccion = 1;
		while(isset($_POST['titulo_seccion'.$numeroSeccion])){
			$titulo_seccion = $_POST['titulo_seccion'.$numeroSeccion];
			$objetivo_seccion = isset($_POST['objetivo_seccion'.$numeroSeccion])?
																$_POST['objetivo_seccion'.$numeroSeccion]:NULL;

			$this->_seccionDao->registrarSeccion($id_pg, $numeroSeccion, $titulo_seccion, $objetivo_seccion);

			$id_seccion = $this->_seccionDao->getId($id_pg, $numeroSeccion);
			$id_seccion = $id_seccion[0];

			$this->registrarContenidos($id_pg, $id_seccion, $numeroSeccion);

			$numeroSeccion++;
		}

	}

	private function registrarContenidos($id_pg, $id_seccion, $numeroSeccion){
		$numeroContenido = 1;

		while(isset($_POST['titulo_contenido'.$numeroContenido."_seccion".$numeroSeccion])){
			$titulo_contenido = $_POST['titulo_contenido'.$numeroContenido."_seccion".$numeroSeccion];
			$descripcion_contenido = isset($_POST['descripcion_contenido'.$numeroContenido."_seccion".$numeroSeccion])?
										$_POST['descripcion_contenido'.$numeroContenido."_seccion".$numeroSeccion]:NULL;

			$this->_contenidoDao->registrarContenidoSeccion($id_pg, $id_seccion, $titulo_contenido, 
																											$numeroContenido, $descripcion_contenido);
			$id_contenido = $this->_contenidoDao->getId($id_pg, $id_seccion, $numeroContenido);
			$id_contenido = $id_contenido[0];

			$this->registrarSubtitulosSeccion($id_pg, $id_seccion, $id_contenido, $numeroSeccion, $numeroContenido);

			$numeroContenido++;
		}
	}

	private function registrarSubtitulosSeccion($id_pg, $id_seccion, $id_contenido, $numeroSeccion, 
																				$numeroContenido){
		$numeroSubtituloSeccion = 1;

		while(isset($_POST['subtitulo'.$numeroSubtituloSeccion.'_contenido'.$numeroContenido.'_seccion'.
												$numeroSeccion])){
			$subtitulo = $_POST['subtitulo'.$numeroSubtituloSeccion.'_contenido'.$numeroContenido.'_seccion'.
												$numeroSeccion];

			$this->_subtituloSeccionDao->registrarSubtitulo($id_pg, $id_seccion, $id_contenido, $subtitulo,
																								$numeroSubtituloSeccion);
			$numeroSubtituloSeccion++;
		}
	}



	private function verificarSiArrayExiste($array){
		return isset($array) && count($array);
	}

	public function validar_codigo($codigo_plan_global){

		$codigo_plan_global = $codigo_plan_global[0];

		$planGlobal = $this->_planGlobalDao->existeCodigo($codigo_plan_global);

		if($planGlobal)
			echo 1;
		else
			echo 0;
	}

	public function getPlanGlobalInsertado(){
		$id_pg = $this->_planGlobalDao->getPlanGlobalInsertado();
		$id_pg = $id_pg[0];
		echo $id_pg;
	}

	public function editarPlanGlobal($id_pg){
		$id_pg = $id_pg[0];

		$planGlobal = $this->_planGlobalDao->getPlanGlobal($id_pg);

		if(!$planGlobal)
			$this->redireccionar("materias");

		$this->_view->tituloFormulario = "Editar Plan Global";
		$this->_view->planGlobal = $planGlobal;
		$this->_view->materia = $this->_materiaDao->getMateriaPlanGlobal($id_pg);
		
		$this->_view->gruposTotales = $this->_grupoDao->getGruposSinPG($this->_view->materia['codigo_materia']);
		$this->_view->gruposPlanGlobal = $this->_grupoDao->getGruposPG($id_pg, $this->_view->materia['codigo_materia']);

		$this->_view->docentesTotales = $this->_grupoDao->getDocentesSinPG($this->_view->materia['codigo_materia']);
		$this->_view->docentesPlanGlobal = $this->_grupoDao->getDocentesPG($id_pg, $this->_view->materia['codigo_materia']);

		$this->_view->carga_horaria = $this->_planGlobalDao->getCargaHoraria($id_pg);

		//cargando datos de la gestion.
		$datosGestion = explode('-', $planGlobal['gestion_pg']);
		$this->_view->gestion = $datosGestion[0];
		$this->_view->anio_gestion = $datosGestion[1];

		$this->_view->objetivosGenerales = $this->_planGlobalDao->getObjetivosGenerales($id_pg);
		$this->_view->objetivosEspecificos = $this->_planGlobalDao->getObjetivosEspecificos($id_pg);
		$this->_view->unidades = $this->_planGlobalDao->getUnidades($id_pg);
		$this->_view->bibliografiasBase = $this->_planGlobalDao->getBibliografiasBase($id_pg);
		$this->_view->bibliografiasComplementaria = $this->_planGlobalDao->getBibliografiasComplementaria($id_pg);
		$this->_view->seccionesAdicionales = $this->_planGlobalDao->getSeccionesAdicionales($id_pg);

		$this->_view->renderizar("editarPlanGlobal");
	}

    public function contenidoMinimo($id_pg){
        // contenido minimo
        $id = $id_pg[0];

		if($id == "0")
			$this->redireccionar("materias");

		// $this->_view->codigo =$id;
		$this->_view->unidades = $this->_planGlobalDao->getUnidades($id);
		$this->_view->materia = $this->_planGlobalDao->getMateria($id);
		$this->_view->codigo = $this->_view->materia['codigo_materia'];
		$this->_view->renderizar("contenidoMinimo");

	}

}
 ?>
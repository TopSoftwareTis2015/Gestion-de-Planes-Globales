<?php 

class planGlobalModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMateria($id_pg){
		$materia = $this->_db->query(
			"SELECT * FROM materias
				WHERE codigo_materia = (SELECT codigo_materia FROM grupos
																	WHERE id_pg = $id_pg
																	LIMIT 1);"
			);

		return $materia->fetch();		
	}

	public function getGrupos($id_pg){
		$grupos = $this->_db->query(
			"SELECT * FROM grupos
				WHERE id_pg = $id_pg
				ORDER BY grupo;"
			);

		return $grupos->fetchall();
	}

	public function getCargaHoraria($id_pg){
		$cargaHoraria = $this->_db->query(
			"SELECT * FROM carga_horarias
				WHERE id_pg = $id_pg;"
			);

		return $cargaHoraria->fetch();
	}

	public function getMateriasRelacionadas($codigo_materia){
		$cargaHoraria = $this->_db->query(
			"(SELECT nombre_materia FROM materias m, prerequisito p 
				WHERE m.codigo_materia = p.codigo_materia 
					AND materia_prerequisito = '$codigo_materia'
				)
			UNION
			(SELECT nombre_materia FROM materias
				WHERE codigo_materia =  ANY (SELECT materia_prerequisito FROM materias m, prerequisito p
																	WHERE m.codigo_materia = p.codigo_materia AND
																		m.codigo_materia = '$codigo_materia'
																)
			)
			ORDER BY nombre_materia ASC;"
			);

		return $cargaHoraria->fetchall();
	}

	public function getDocentes($id_pg){
		$docentes = $this->_db->query(
			"SELECT * FROM docentes
				WHERE id_usuario = ANY (SELECT DISTINCT id_usuario FROM grupos
																	WHERE id_pg = $id_pg
																);"
			);

		return $docentes->fetchall();
	}

	public function getPlanGlobal($id_pg){
		$planGlobal = $this->_db->query(
			"SELECT * FROM planes_globales
				WHERE id_pg = $id_pg;"
			);

		return $planGlobal->fetch();
	}

	public function insertarPlanGlobal($titulo, $justificacion, $metodologias, $criterios_evaluacion,
																		$gestion_pg, $codigo_plan_global, $numero_plan_global){
		$this->_db->prepare("INSERT INTO planes_globales VALUES
													(default, :titulo, :justificacion, :metodologias, :criterios_evaluacion,
														TRUE, :gestion_pg, :codigo_plan_global, :numero_plan_global)")
													->execute(array(
														':titulo' => $titulo,
														':justificacion' => $justificacion,
														':metodologias' => $metodologias,
														':criterios_evaluacion' => $criterios_evaluacion,
														':gestion_pg' => $gestion_pg,
														':codigo_plan_global' => $codigo_plan_global,
														':numero_plan_global' => $numero_plan_global
														));
	}	

	public function getObjetivosGenerales($id_pg){
		$objetivosGenerales = $this->_db->query(
			"SELECT * FROM objetivos_generales
				WHERE id_pg = $id_pg
				ORDER BY numero_objetivo_general;"
			);

		return $objetivosGenerales->fetchall();
	}

	public function getObjetivosEspecificos($id_pg){
		$objetivosEspecificos = $this->_db->query(
			"SELECT * FROM objetivos_especificos
				WHERE id_pg = $id_pg
				ORDER BY numero_objetivo_especifico;"
			);

		return $objetivosEspecificos->fetchall();
	}

	public function getUnidades($id_pg){
		$unidades = $this->_db->query(
			"SELECT * from (SELECT * FROM unidad u FULL OUTER JOIN capitulo c on u.id_unidad = c.id_unidad
												where u.id_pg = $id_pg) as consulta LEFT OUTER JOIN subtitulo s on consulta.id_capitulo = s.id_capitulo
				order by consulta.numero_unidad, consulta.numero_capitulo, s.numero_subtitulo;"
			);

		return $unidades->fetchall();
	}

	public function getBibliografiasBase($id_pg){
		$bibliografias = $this->_db->query(
			"SELECT * FROM bibliografias
				WHERE id_pg = $id_pg AND tipo_libro = 'base'
				ORDER BY numero_bibliografia;"
			);

		return $bibliografias->fetchall();
	}

	public function getBibliografiasComplementaria($id_pg){
		$bibliografias = $this->_db->query(
			"SELECT * FROM bibliografias
				WHERE id_pg = $id_pg AND tipo_libro = 'complementaria'
				ORDER BY numero_bibliografia;"
			);

		return $bibliografias->fetchall();
	}

	public function getSeccionesAdicionales($id_pg){
		$seccionesAdicionales = $this->_db->query(
			"SELECT * from (SELECT * FROM secciones_adicionales s FULL OUTER JOIN contenidos_seccion c on s.id_seccion = c.id_seccion
												where s.id_pg = $id_pg) as consulta LEFT OUTER JOIN subtitulos_contenido_seccion ss on consulta.id_contenido = ss.id_contenido
				order by consulta.numero_seccion, consulta.numero_contenido, ss.numero_subtitulo_seccion;"
			);

		return $seccionesAdicionales->fetchall();
	}

	public function getId($codigo_plan_global){
		$id = $this->_db->query(
			"SELECT id_pg FROM planes_globales
				WHERE codigo_plan_global = '$codigo_plan_global';"
			);

		return $id->fetch();
	}

	public function registrarGrupoPlanGlobal($codigo_materia, $id_usuario, $grupo, $id_pg){
		$this->_db->query("UPDATE grupos SET
												id_pg = $id_pg
												WHERE codigo_materia = '$codigo_materia' AND id_usuario = $id_usuario
															AND grupo = $grupo;");
	}

	public function existeCodigo($codigo_plan_global){
		$planGlobal = $this->_db->query("SELECT * FROM planes_globales
																			WHERE codigo_plan_global = '$codigo_plan_global';");

		return $planGlobal->fetch();
	}

	public function getNumeroPlanGlobal($codigo_materia){
		$numero_plan_global = $this->_db->query("SELECT MAX(numero_plan_global) AS numero_maximo FROM planes_globales p, grupos g
																							WHERE g.id_pg = p.id_pg AND codigo_materia = '$codigo_materia';");

		return $numero_plan_global->fetch();
	}

	public function getPlanGlobalInsertado(){
		$id_pg = $this->_db->query("SELECT MAX(id_pg) FROM planes_globales;");

		return $id_pg->fetch();
	}

}



 ?>
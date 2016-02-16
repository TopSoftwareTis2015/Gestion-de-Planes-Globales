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
				WHERE id_pg = $id_pg;"
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

	public function getObjetivosGenerales($id_pg){
		$objetivosGenerales = $this->_db->query(
			"SELECT * FROM objetivos_generales
				WHERE id_pg = $id_pg;"
			);

		return $objetivosGenerales->fetchall();
	}

	public function getObjetivosEspecificos($id_pg){
		$objetivosEspecificos = $this->_db->query(
			"SELECT * FROM objetivos_especificos
				WHERE id_pg = $id_pg;"
			);

		return $objetivosEspecificos->fetchall();
	}

	public function getUnidades($id_pg){
		$unidades = $this->_db->query(
			"SELECT * from (SELECT * FROM unidad u FULL OUTER JOIN capitulo c on u.id_unidad = c.id_unidad
												where u.id_pg = $id_pg) as consulta full outer join subtitulo s on consulta.id_capitulo = s.id_capitulo
				order by consulta.numero_unidad, consulta.numero_capitulo, s.numero_subtitulo;"
			);

		return $unidades->fetchall();
	}

	public function getBibliografias($id_pg){
		$bibliografias = $this->_db->query(
			"SELECT * FROM bibliografias
				WHERE id_pg = $id_pg;"
			);

		return $bibliografias->fetchall();
	}

	public function getSeccionesAdicionales($id_pg){
		$seccionesAdicionales = $this->_db->query(
			"SELECT * from (SELECT * FROM secciones_adicionales s FULL OUTER JOIN contenidos_seccion c on s.id_seccion = c.id_seccion
												where s.id_pg = $id_pg) as consulta full outer join subtitulos_contenido_seccion ss on consulta.id_contenido = ss.id_contenido
				order by consulta.numero_seccion, consulta.numero_contenido, ss.numero_subtitulo_seccion;"
			);

		return $seccionesAdicionales->fetchall();
	}

}



 ?>
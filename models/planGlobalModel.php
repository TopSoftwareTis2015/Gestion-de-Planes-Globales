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

		return $materia->fetchall();		
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
					AND materia_prerequisito = $codigo_materia
				)
			UNION
			(SELECT nombre_materia FROM materias
				WHERE codigo_materia = (SELECT materia_prerequisito FROM materias m, prerequisito p
																	WHERE m.codigo_materia = p.codigo_materia AND
																		m.codigo_materia = $codigo_materia
																)
			)
			ORDER BY nombre_materia ASC;"
			);

		return $cargaHoraria->fetchall();
	}


}



 ?>
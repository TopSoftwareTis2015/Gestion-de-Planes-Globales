<?php 

class grupoModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getGruposSinPG($codigo_materia){
		$grupos = $this->_db->query(
			"SELECT * FROM grupos
				WHERE codigo_materia='$codigo_materia' AND id_pg IS NULL
				ORDER BY grupo;"
			);

		return $grupos->fetchall();
	}

	public function getGruposPG($id_pg, $codigo_materia){
		$grupos = $this->_db->query(
			"SELECT * FROM grupos
				WHERE codigo_materia='$codigo_materia' AND id_pg = $id_pg
				ORDER BY grupo;"
			);

		return $grupos->fetchall();
	}

	public function getDocentesSinPG($codigo_materia){
		$docentes = $this->_db->query(
			"SELECT DISTINCT d.* FROM docentes d FULL OUTER JOIN grupos g ON d.id_usuario = g.id_usuario
				WHERE g.codigo_materia = '$codigo_materia' AND g.id_pg IS NULL;"
			);

		return $docentes->fetchall();
	}

	public function getDocentesPG($id_pg, $codigo_materia){
		$docentes = $this->_db->query(
			"SELECT DISTINCT d.* FROM docentes d FULL OUTER JOIN grupos g ON d.id_usuario = g.id_usuario
				WHERE g.codigo_materia = '$codigo_materia' AND g.id_pg = $id_pg;"
			);

		return $docentes->fetchall();
	}
}



 ?>
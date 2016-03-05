<?php 

class unidadesModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarUnidad($id_pg, $titulo_unidad, $objetivo_unidad, $numero_unidad,
																	$duracion_horas_academicas, $duracion_semanas){
		$exito = $this->_db->prepare("INSERT INTO unidad VALUES
													(:id_pg, default, :titulo_unidad, :objetivo_unidad,
														:duracion_horas_academicas, :duracion_semanas, :numero_unidad)")
												->execute(array(
														':id_pg' => $id_pg,
														':titulo_unidad' => $titulo_unidad,
														':objetivo_unidad' => $objetivo_unidad,
														':duracion_horas_academicas' => $duracion_horas_academicas,
														':duracion_semanas' => $duracion_semanas,
														':numero_unidad' => $numero_unidad
													));

		if(!$exito){
			print_r("registro unidad" . $this->_db->errorInfo());
			exit;
		}
	}

	public function getId($id_pg, $numero_unidad){
		$id = $this->_db->query(
			"SELECT id_unidad FROM unidad
				WHERE id_pg = $id_pg AND numero_unidad = $numero_unidad;"
				);

		return $id->fetch();
	}
}



 ?>
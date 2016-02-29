<?php 

class unidadesModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarUnidad($id_pg, $titulo_unidad, $objetivo_unidad, $numero_unidad,
																	$duracion_horas_academicas, $duracion_semanas){
		$this->_db->prepare("INSERT INTO unidad VALUES
													(:id_pg, default, :titulo_unidad, :objetivo_unidad, :numero_unidad,
														:duracion_horas_academicas, :duracion_semanas)")
												->execute(array(
														':id_pg' => $id_pg,
														':titulo_unidad' => $titulo_unidad,
														':objetivo_unidad' => $objetivo_unidad,
														':numero_unidad' => $numero_unidad,
														':duracion_horas_academicas' => $duracion_horas_academicas,
														':duracion_semanas' => $duracion_semanas
													));
	}
}




 ?>
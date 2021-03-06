<?php

class objetivosModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarObjetivo($tablaObjetivo, $id_pg, $titulo_objetivo, $descripcion_objetivo,
	 																	$numero_objetivo){
		$exito = $this->_db->prepare("INSERT INTO $tablaObjetivo VALUES
													(:id_pg, default, :titulo_objetivo, :descripcion_objetivo, :numero_objetivo)")
												->execute(array(
													':id_pg' => $id_pg,
													':titulo_objetivo' => $titulo_objetivo,
													':descripcion_objetivo' => $descripcion_objetivo,
													':numero_objetivo' => $numero_objetivo
													));
		if(!$exito){
			print_r("Registro objetivo". $this->_db->errorInfo());
			exit;
		}
	}

	public function eliminarObjetivos($id_pg){
		$this->_db->query("DELETE FROM objetivos_especificos
												WHERE id_pg = $id_pg;");
		$this->_db->query("DELETE FROM objetivos_generales
												WHERE id_pg = $id_pg;");
	}
}


 ?>
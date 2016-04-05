<?php 

class elementoBasicoModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function guardarElementoBAsico($id_basico, $numero_elemento_basico){
		$exito = $this->_db->prepare("INSERT INTO elementos_basicos VALUES
													(default, :id_basico, :numero_elemento_basico)")
												->execute(array(
													':id_basico' => $id_basico,
													':numero_elemento_basico' => $numero_elemento_basico
													));
		
		if(!$exito){
			print_r("Registro Seccion" . $this->_db->errorInfo());
			exit;
		}
	}

	// public function eliminarSubtitulos($id_pg, $id_unidad, $id_contenido){
	// 	$this->_db->query("DELETE FROM subtitulo
	// 											WHERE id_pg = $id_pg and id_unidad = $id_unidad and id_capitulo = $id_contenido");
	// }
	// 
	
	public function getIdd(){
		$id = $this->_db->query(
			"SELECT id_basico FROM elementos_basicos
				ORDER BY id_basico DESC
				LIMIT 1;"
			);

		return $id->fetch();
	}
}
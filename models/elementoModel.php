<?php 

class elementoModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function guardarElemento($id_tipo_elemento, $id_basico, $titulo_elemento, $required, $numero_elemento){
		$exito = $this->_db->prepare("INSERT INTO elementos VALUES
													(default, :id_tipo_elemento, :id_basico, :titulo_elemento, :required, :numero_elemento)")
												->execute(array(
													':id_tipo_elemento' => $id_tipo_elemento,
													':id_basico' => $id_basico,
													':titulo_elemento' => $titulo_elemento,
													':required' => $required,
													':numero_elemento' => $numero_elemento,
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
			"SELECT id_elemento FROM elementos_basicos
				ORDER BY id_elemento DESC
				LIMIT 1;"
			);

		return $id->fetch();
	}
}
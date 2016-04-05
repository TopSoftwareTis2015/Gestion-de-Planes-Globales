<?php 

class elementoListaModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function guardarElemento($numero_elemento_lista){
		$exito = $this->_db->prepare("INSERT INTO lista_elementos_basicos VALUES
													(default, :numero_elemento_lista)")
												->execute(array(
													':numero_elemento_lista' => $numero_elemento_lista,
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
			"SELECT id_lista_elementos_basicos FROM lista_elementos_basicos
				ORDER BY id_lista_elementos_basicos DESC
				LIMIT 1;"
			);

		return $id->fetch();
	}
}
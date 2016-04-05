<?php 

class seccionModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrar($id_pg, $titulo_principal_seccion){
		$exito = $this->_db->prepare("INSERT INTO secciones VALUES
													(default, :id_pg, :titulo_principal_seccion)")
												->execute(array(
													':id_pg' => $id_pg,
													':titulo_principal_seccion' => $titulo_principal_seccion
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
			"SELECT id FROM secciones
				ORDER BY id DESC
				LIMIT 1;"
			);

		return $id->fetch();
	}
}
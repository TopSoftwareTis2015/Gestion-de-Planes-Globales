<?php 

class subtitulos_contenido_seccionModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarSubtitulo($id_pg, $id_seccion, $id_contenido, $subtitulo_seccion, 
																			$numero_subitulo_seccion){
		$exito = $this->_db->prepare("INSERT INTO subtitulos_contenido_seccion VALUES
			                    (:id_pg, :id_seccion, :id_contenido, default, :subtitulo_seccion,
			                    	:numero_subitulo_seccion)")
												->execute(array(
													':id_pg' => $id_pg,
													':id_seccion' => $id_seccion,
													':id_contenido' => $id_contenido,
													':subtitulo_seccion' => $subtitulo_seccion,
													':numero_subitulo_seccion' => $numero_subitulo_seccion
													));

		if(!$exito){
			print_r("Registro Subtitulo contenido Seccion " . $this->_db->errorInfo());
			exit;
		}
	}

	public function eliminarSubtitulos($id_pg, $id_seccion, $id_contenido){
		$this->_db->query("DELETE FROM subtitulos_contenido_seccion
												WHERE id_pg = $id_pg and id_seccion = $id_seccion and id_contenido = $id_contenido");
	}
}




 ?>
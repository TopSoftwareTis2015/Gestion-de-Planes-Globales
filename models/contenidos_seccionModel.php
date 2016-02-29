<?php 

class contenidos_seccionModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarContenidoSeccion($id_pg, $id_seccion, $titulo_contenido,
																						$numero_contenido, $descripcion_contenido){
		$this->_db->prepare("INSERT INTO contenidos_seccion VALUES
													(:id_pg, :id_seccion, default, :titulo_contenido, :numero_contenido,
													 :descripcion_contenido)")
													->execute(array(
														':id_pg' => $id_pg,
														':id_seccion' => $id_seccion,
														':titulo_contenido' => $titulo_contenido,
														':numero_contenido' => $numero_contenido,
														':descripcion_contenido' => $descripcion_contenido
														));
	}
}




 ?>
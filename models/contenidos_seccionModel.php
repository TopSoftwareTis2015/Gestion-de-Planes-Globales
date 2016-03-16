<?php 

class contenidos_seccionModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarContenidoSeccion($id_pg, $id_seccion, $titulo_contenido,
																						$numero_contenido, $descripcion_contenido){
		$exito = $this->_db->prepare("INSERT INTO contenidos_seccion VALUES
													(:id_pg, :id_seccion, default, :titulo_contenido, :numero_contenido,
													 :descripcion_contenido)")
													->execute(array(
														':id_pg' => $id_pg,
														':id_seccion' => $id_seccion,
														':titulo_contenido' => $titulo_contenido,
														':numero_contenido' => $numero_contenido,
														':descripcion_contenido' => $descripcion_contenido
														));

		if(!$exito){
			print_r("Registro Contenido Seccion" . $this->_db->errorInfo());
			exit;
		}
	}

	public function getId($id_pg, $id_seccion, $numero_contenido){
		$id = $this->_db->query(
			"SELECT id_contenido FROM contenidos_seccion
				WHERE id_pg = $id_pg AND id_seccion = $id_seccion AND numero_contenido = $numero_contenido;"
				);

		return $id->fetch();
	}

	public function eliminarContenidos($id_pg, $id_seccion){
		$this->_db->query("DELETE FROM contenidos_seccion
												WHERE id_pg = $id_pg and id_seccion = $id_unidad;");
	}
}




 ?>
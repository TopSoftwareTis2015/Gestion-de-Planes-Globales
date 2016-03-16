<?php 

class capituloModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarCapitulo($id_pg, $id_unidad, $titulo_capitulo, $numero_capitulo){
		$exito = $this->_db->prepare("INSERT INTO capitulo VALUES
													(:id_pg, :id_unidad, default, :titulo_capitulo, :numero_capitulo)")
												->execute(array(
													':id_pg' => $id_pg,
													':id_unidad' => $id_unidad,
													':titulo_capitulo' => $titulo_capitulo,
													':numero_capitulo' => $numero_capitulo
													));

		if(!$exito){
			print_r("Registro Capitulo" . $this->_db->errorInfo());
			exit;
		}
	}

	public function getId($id_pg, $id_unidad, $numero_capitulo){
		$id = $this->_db->query(
			"SELECT id_capitulo FROM capitulo
				WHERE id_pg = $id_pg AND id_unidad = $id_unidad AND numero_capitulo = $numero_capitulo;"
				);

		return $id->fetch();
	}

	public function eliminarContenidos($id_pg, $id_unidad){
		$this->_db->query("DELETE FROM capitulo
												WHERE id_pg = $id_pg and id_unidad = $id_unidad;");
	}
}




 ?>
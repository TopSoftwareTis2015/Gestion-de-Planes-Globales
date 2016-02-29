<?php 

class capituloModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarCapitulo($id_pg, $id_unidad, $titulo_capitulo, $numero_capitulo){
		$this->_db->prepare("INSERT INTO capitulo VALUES
													(:id_pg, :id_unidad, default, :titulo_capitulo, :numero_capitulo)")
												->execute(array(
													':id_pg' => $id_pg,
													':id_unidad' => $id_unidad,
													':titulo_capitulo' => $titulo_capitulo,
													':numero_capitulo' => $numero_capitulo
													));
	}
}




 ?>
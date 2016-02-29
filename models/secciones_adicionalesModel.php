<?php 

class secciones_adicionalesModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarSeccion($id_pg, $numero_seccion, $titulo_seccion, $objetivo_seccion){
		$this->_db->prepare("INSERT INTO secciones_adicionales VALUES
													(:id_pg, default, :numero_seccion, :titulo_seccion, :objetivo_seccion)")
												->execute(array(
													':id_pg' => $id_pg,
													':numero_seccion' => $numero_seccion,
													':titulo_seccion' => $titulo_seccion,
													':objetivo_seccion' => $objetivo_seccion
													));
	}
}




 ?>
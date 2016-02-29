<?php 

class subtituloModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarSubtitulo($id_pg, $id_unidad, $id_capitulo, $subtitulo, $numero_subtitulo){
		$this->_db->prepare("INSERT INTO subtitulo VALUES
													(:id_pg, :id_unidad, :id_capitulo, default, :subtitulo, :numero_subtitulo)")
												->exeute(array(
													':id_pg' => $id_pg,
													':id_unidad' => $id_unidad,
													':id_capitulo' => $id_capitulo,
													':subtitulo' => $subtitulo,
													':numero_subtitulo' => $numero_subtitulo
													));
	}
}




 ?>
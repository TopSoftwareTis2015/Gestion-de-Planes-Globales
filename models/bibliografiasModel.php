<?php 

class bibliografiasModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarBibliografia($id_pg, $nombre_libro, $autor_libro, $tipo_libro){
		$this->_db->prepare("INSERT INTO bibliografias VALUES
													(:id_pg, default, :nombre_libro, :autor_libro, :tipo_libro")
												->execute(array(
													':id_pg' => $id_pg,
													':nombre_libro' => $nombre_libro,
													':autor_libro' => $autor_libro,
													':tipo_libro' => $tipo_libro
													));
	}
}




 ?>
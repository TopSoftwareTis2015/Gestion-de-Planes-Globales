<?php 

class materiasModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMaterias(){
		$listaMaterias = $this->_db->query("select * from materia");

		return $listaMaterias->fetchall();
	}

	public function registrarMateria($codigo_materia, $nombre_materia, $sigla_materia){
		$this->_db->prepare("insert into materia values
												(:nombre, :codigo, :sigla)")
												->execute(array(
													':nombre' => $nombre_materia,
													':codigo' => $codigo_materia,
													':sigla' => $sigla_materia
												));
	}

	public function eliminarMateria($codigo_materia){
		$this->_db-> query("delete from materia where codigo_materia = '$codigo_materia'");
	}
}

 ?>
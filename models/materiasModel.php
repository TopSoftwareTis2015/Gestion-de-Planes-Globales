<?php 

class materiasModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMaterias(){
		$listaMaterias = $this->_db->query("select * from materias");

		return $listaMaterias->fetchall();
	}

	public function registrarMateria($codigo_materia, $nombre_materia, $sigla_materia){
		$this->_db->prepare("insert into materias values
												(:nombre, :codigo, :sigla)")
												->execute(array(
													':nombre' => $nombre_materia,
													':codigo' => $codigo_materia,
													':sigla' => $sigla_materia
												));
	}

	public function getMateria($campo, $valor){
		$materia = $this->_db->query(
			"select * from materias where $campo='$valor'");

		return $materia->fetch();
	}

	public function eliminarMateria($codigo_materia){
		$this->_db-> query("delete from materias where codigo_materia = '$codigo_materia'");
	}

	public function editarMateria($nombre_materia, $codigo_nuevo, $sigla_materia, $codigo_materia){
		$this->_db->prepare("update materias set
													nombre_materia = :nombre_materia,
													codigo_materia = :codigo_nuevo,
													sigla_materia = :sigla_materia
													where codigo_materia = '$codigo_materia'")
												->execute(
													array(
													':nombre_materia' =>$nombre_materia,
													':codigo_nuevo' =>$codigo_nuevo,
													':sigla_materia' =>$sigla_materia
													));
	}
}

 ?>
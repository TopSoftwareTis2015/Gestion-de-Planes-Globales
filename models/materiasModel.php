<?php 

class materiasModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMateriasGrupos(){
		$listaMaterias = $this->_db->query("SELECT m.*, p.id_pg, p.numero_plan_global FROM 
			materias m full outer join grupos g ON m.codigo_materia = g.codigo_materia 
			full outer join planes_globales p ON g.id_pg = p.id_pg
			ORDER BY m.codigo_materia, p,numero_plan_global;");

		return $listaMaterias->fetchall();
	}

	public function registrarMateria($codigo_materia, $nombre_materia, $sigla_materia){
		$this->_db->prepare("insert into materias values
												(:codigo, :nombre, :sigla, TRUE)")
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
		$this->_db-> query("update materias set 
													habilitada_materia = FALSE
													where codigo_materia = '$codigo_materia';");
	}

	public function darDeAlta($codigo_materia){
		$this->_db-> query("update materias set 
													habilitada_materia = TRUE
													where codigo_materia = '$codigo_materia';");
	}

	public function obtenerPlanEstudiosVigente($codigo_materia){
		$planDeEstudio = $this->_db-> query("select * from plan_de_estudios
																					where codigo_plan_estudio = 
																						(select codigo_plan_estudio from niveles_materias
																								where codigo_materia = '$codigo_materia') 
																						and plan_de_estudios.habilitado_plan_estudio = TRUE;");
		return $planDeEstudio->fetch();
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
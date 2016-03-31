<?php 

class planEstudioModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	// public function getMateriasGrupos(){
	// 	$listaMaterias = $this->_db->query("SELECT m.*, p.id_pg, p.numero_plan_global FROM 
	// 		materias m full outer join grupos g ON m.codigo_materia = g.codigo_materia 
	// 		full outer join planes_globales p ON g.id_pg = p.id_pg
	// 		ORDER BY m.codigo_materia, p,numero_plan_global;");

	// 	return $listaMaterias->fetchall();
	// }

	public function getMateriasGrupos(){
		$listaMaterias = $this->_db->query("SELECT m.*,n.numero_nivel, p.id_pg, p.numero_plan_global FROM 
			materias m full outer join grupos g ON m.codigo_materia = g.codigo_materia 
			full outer join planes_globales p ON g.id_pg = p.id_pg full outer join niveles_materias n ON m.codigo_materia = n.codigo_materia WHERE m.habilitada_materia = true
			ORDER BY n.numero_nivel, p.numero_plan_global;");

			// ORDER BY m.codigo_materia, p.numero_plan_global;");


// SELECT * FROM materias m inner join niveles_materias n on m.codigo_materia=n.codigo_materia WHERE n.numero_nivel="1".
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
 }	
	
?>
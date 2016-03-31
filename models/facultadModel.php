<?php 

class facultadModel extends Model{

	public function __construct(){
		parent::__construct();
	}
    
    public function getCarreras(){
		$listaCarreras = $this->_db->query("SELECT c.nombre, c.anio_carrera FROM 
			carreras c ORDER BY c.nombre;");

		return $listaCarreras->fetchall();
	}

	public function verificarCarrera($nombre){
		$listaCarreras = $this->_db->query("SELECT p.nombre FROM 
			plan_de_estudios p WHERE p.nombre=".$nombre." AND p.habilitado_plan_estudio='t';"); 

		return $listaCarreras->fetchall();
	}
	
}


 ?>
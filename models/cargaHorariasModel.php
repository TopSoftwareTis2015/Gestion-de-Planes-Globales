<?php

class cargaHorariasModel extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function registrarCargaHoraria($id_pg, $horas_semestre, $periodos_semana,
																				$periodos_teoricos_semana, $periodos_practicos_semana){
		$this->_db->prepare("INSERT INTO carga_horarias VALUES
													(:id_pg, :horas_semestre, :periodos_semana, :periodos_teoricos_semana,
														:periodos_practicos_semana)")
													->execute(array(
														':id_pg' => $id_pg,
														':horas_semestre' => $horas_semestre,
														':periodos_semana' => $periodos_semana,
														':periodos_teoricos_semana' => $periodos_teoricos_semana,
														':periodos_practicos_semana' => $periodos_practicos_semana
													));
	}
	
}




 ?>
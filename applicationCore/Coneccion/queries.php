<?php
#incluimos el archivo donde estan todas las clases
include("DatabaseConeccion.php");

class queries
{
	private $db;
	public function __construct() {
		$this->db = new db();
	}

	/**
	* Retorna todas las materias registradas
	*/
	public function ListarMaterias(){
		$rows = $db->ejecutarSentencia("SELECT _CODIGOMATERIA, _NOMMATERIA, SIGLAMATERIA FROM Materia",NULL,NULL);
		return $rows;
	}
	/**
	* Retorna una materia en especifico
	* @Param NombreMateria
	*/
	public function ObtenerMateria($NombreMateria){
		$rows = $this->db->ejecutarSentencia("SELECT _CODIGOMATERIA, _NOMMATERIA, SIGLAMATERIA " .
			"FROM Materia " .
			"WHERE _NOMMATERIA = " . $NombreMateria);
	}
	/**
	* Inserta una nueva materia
	*/
	public function InsertarMateria($CodMateria, $NombreMateria, $SiglaMateria){
	//TODO - Averiguar como hacer funcionar esto
		$rows = $this->db->insert("Materia",["_CODIGOMATERIA=".$CodMateria,"_NOMMATERIA=".$NombreMateria,"SIGLAMATERIA=".$SiglaMateria]);
	}
	/**
	* Elimina una materia
	*/
	public function EliminarMateria($NombreMateria){

	}
}
?>
<?php
#incluimos el archivo donde estan todas las clases
include("DatabaseConeccion.php");

/**/
pivate $db;
public function __construct() {/**/
	$db = new db();
}

/**
* Retorna todas las materias registradas
*/
public function ListarMaterias(){
	$rows = $db->EjecutarSentencia("SELECT 	_CODIGOMATERIA, _NOMMATERIA, SIGLAMATERIA FROM Materia");
}
/**
* Retorna una materia en especifico
* @Param NombreMateria
*/
public function ObtenerMateria($NombreMateria){
	$rows = $db->EjecutarSentencia("SELECT 	_CODIGOMATERIA, _NOMMATERIA, SIGLAMATERIA " .
		"FROM Materia " .
		"WHERE _NOMMATERIA = " . $NombreMateria);
}
/**
* Inserta una nueva materia
*/
public function InsertarMateria($CodMateria, $NombreMateria, $SiglaMateria){

	$CodMateria = "123";
	$NombreMateria = "TEST1";
	$SiglaMateria = "S1";
//TODO - Averiguar como hacer funcionar esto
	$rows = $db->insert("Materia",["_CODIGOMATERIA=".$CodMateria,"_NOMMATERIA=".$NombreMateria,"SIGLAMATERIA=".$SiglaMateria]);
}
/**
* Elimina una materia
*/
public function EliminarMateria($NombreMateria){

}

print_r($rows);
?>
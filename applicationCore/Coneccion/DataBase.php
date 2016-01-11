<?php 
include "../Config.php";
final class DataBase extends PDO{

	public function __construct(){
		try{
			parent::__construct(
				'mysql:host=' . DB_HOST.';'.
				//'port=' . DB_PORT . ';' . 
				'dbname=' . DB_NAME . ';',
				DB_USER,
				DB_PASS
				);
		}
		catch (Exception $e){
			throw new Exception("Error en la conexion de la base de datos ".$e);
		}
	}
}

 ?>
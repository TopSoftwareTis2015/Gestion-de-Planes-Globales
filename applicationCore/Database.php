<?php 

class Database extends PDO{

	public function __construct(){
		try{
			parent::__construct(
				'pgsql:host=' . DB_HOST . ';' .
				'port=' . DB_PORT . ';' .
				'dbname=' . DB_NAME . ';' .
				'user=' . DB_USER . ';' .
				'password=' . DB_PASS
				);
		} catch (Exception $e) {
			throw new Exception("Error en la conexion de la base de datos: " . $e);
		}
	}
}


 ?>
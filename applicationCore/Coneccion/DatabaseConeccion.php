<?php 
error_reporting ( E_ALL );
ini_set ( "display_errors" , 1 ); 
include("DbConeccion_Interface.php");
include("db.php");
class DatabaseConeccion implements DbConeccion_Interface
{
    public static function create()
    {
        include('DataBase.php');
        $db = new Database();
        return $db;
    }
}
?>
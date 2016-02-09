<?php
/**
 * Created by PhpStorm.
 * User: ISXT
 * Date: 08/02/2016
 * Time: 02:39 AM
 */

$user = "postgres";
$password = "postgres";
$dbname = "planGlobal";
$port = "5432";
$host = "localhost";

$cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";

$conexion = pg_connect($cadenaConexion) or die("Error en la Conexión: ".pg_last_error());

$gM=$_GET['dato'];

$query = "SELECT
  numero_fijo_usuario,
  numero_movil_usuario,
  correo_usuario
FROM
  docente
WHERE
  docente.nombre_usuario = '".$gM."';";

$resultado = pg_query( $query) or die("Error Conchulta SQL cucu");
$numReg = pg_num_rows($resultado);

if($numReg>0){

    while ($fila=pg_fetch_array($resultado)) {
        echo "<textarea>".$fila['numero_fijo_usuario']."\n".$fila['numero_movil_usuario']."</textarea>";
        echo "</br>";
        echo "<textarea>".$fila['correo_usuario']."</textarea>";
    }
}else{
    echo "No hay Registros";
}

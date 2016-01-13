<?php
  $conexion=mysql_connect("localhost","root");
   if(!$conexion)
  {
	die("No se ha podido conectar al servidor:".mysql_error());
  }
  $bd_seleccionada=mysql_select_db("planglobalnuevo",$conexion);
  if(!$bd_seleccionada)
  {
  	die("No hemos podido seleccionar la base de datos:".mysql_error($conexion));
  }
  ?>
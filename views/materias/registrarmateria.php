<?php require_once("../include/verificarconexion.php"); ?>
 <?php
     $codigomateria = $_POST["codigomateria"];
     $nommateria = $_POST["nommateria"];
     $siglamateria=$_POST["siglamateria"];
     $consulta= "INSERT INTO materia(codigomateria,nommateria,siglamateria) VALUES('{$codigomateria}','{$nommateria}','{$siglamateria}')";
     if(mysql_query($consulta,$conexion))
     {
 	  header("Location: index.php");  
 	  exit;
 	 }
     else{
     echo"No se ha podido crear el curso".mysql_error();
     }
     ?>
    <?php
     mysql_close($conexion);
  ?>


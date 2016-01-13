<?php  require_once("include/verificarconexion.php")   ?> 
  <?php

     $codigomateria = $_POST['codigomateria']; 
     $nommateria = $_POST['nommateria']; 
     $siglamateria = $_POST['siglamateria']; 

     $sql = "UPDATE materia SET codigomateria='$codigomateria', nommateria='$nommateria',siglamateria='$siglamateria' WHERE(codigomateria='$codigomateria' or  nommateria='$nommateria') ";
 

      if (mysql_query($sql)) { 

       header("Location: index.php");  
 	   exit;
      } else { 
     echo "Error de actualizacion ".mysql_error(); 
      } 	
 ?>
 <?php
 mysql_close($conexion);
 ?>
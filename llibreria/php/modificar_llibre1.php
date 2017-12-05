<?php
include_once("classe_llibre.php");

  $llibre=new Llibre($row['id_autor'],$row['titol'],$row['num_edicio'],$row['lloc_publicacio'],$row['any_edicio'],$row['editorial'],$row['isbn'],$row['quantitat']);
  $llibre->modificarLlibre();
?>

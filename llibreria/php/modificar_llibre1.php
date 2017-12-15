<?php
include_once("classe_llibre.php");

  $llibre=new Llibre($_GET['autor'],$_GET['titol'],$_GET['nedicio'],$_GET['llpubli'],$_GET['any'],$_GET['editorial'],$_GET['isbn'],$_GET['id']);
  $llibre->modificarLlibre();
?>

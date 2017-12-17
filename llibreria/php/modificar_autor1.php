<?php
include_once("classe_autor.php");

  $autor=new autor($_GET['id'],$_GET['nom'],$_GET['cognom'],$_GET['pais']);
  $autor->modificarAutors();
?>

<?php
include("classe_autor.php");

  $autor=new autor($_GET['id'],$_GET['nom'],$_GET['cognom'],$_GET['pais']);

  if ($autor->modificarAutors()) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/incorrecte.php");
  }

?>

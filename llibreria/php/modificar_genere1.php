<?php
include_once("classe_genere.php");

  $genere=new genere($_GET['id'],$_GET['nom']);
  
  if ($genere->modificarGeneres()) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/correcte.php");
  }
?>

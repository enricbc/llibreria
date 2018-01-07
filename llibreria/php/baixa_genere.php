<?php
  include_once("classe_genere.php");
  $id=$_GET['id'];
  $genere=new genere($id);

  if ($genere->esborrarGeneres()) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/incorrecte.php");
  }
 ?>

<?php
  include_once("classe_autor.php");
  $id=$_GET['id'];
  $autor=new autor($id);
  
  if ($autor->esborrarAutors()) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/incorrecte.php");
  }
 ?>

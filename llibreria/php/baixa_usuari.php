<?php
  include("classe_usuari.php");
  $id=$_GET['id'];
  $usuari=new usuari($id);
  $usuari->esborrarUsuari();
 ?>

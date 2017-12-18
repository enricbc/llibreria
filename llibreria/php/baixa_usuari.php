<?php
  include_once("clase_usuari.php");
  $id=$_GET['id'];
  $usuari=new usuari($id);
  $usuari->esborrarUsuari();
 ?>

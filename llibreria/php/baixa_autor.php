<?php
  include_once("classe_autor.php");
  $id=$_GET['id'];
  $autor=new autor($id);
  $autor->esborrarAutors();
 ?>

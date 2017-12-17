<?php
include_once("classe_llibre.php");
$id=$_GET['id'];
$llibre=new Llibre($id);
$llibre->esborrarLlibres();
 ?>

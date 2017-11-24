<?php
include_once("classe_autor.php");

$autor=new autor($_GET['nom'],$_GET['cognom'],$_GET['pais']);

$autor->inserirAutor();
 ?>

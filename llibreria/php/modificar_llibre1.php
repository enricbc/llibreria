<?php
include("classe_llibre.php");
$array=$_GET["genere"];

  $llibre=new Llibre($_GET['autor'],$_GET['titol'],$_GET['nedicio'],$_GET['llpubli'],$_GET['any'],$_GET['editorial'],$_GET['isbn'],$array,$_GET['id']);

  if ($llibre->modificarLlibre()) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/incorrecte.php");
  }

?>

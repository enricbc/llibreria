<?php
include("classe_stock.php");
  $array=$_GET["id"];
  foreach ($array as &$value) {
  $result=Stock::esborrarStock($value);
  }
  if($result) {
    header("Location: ../JavaScript/correcte.php");
  }else {
    header("Location: ../JavaScript/incorrecte.php");
  }

 ?>

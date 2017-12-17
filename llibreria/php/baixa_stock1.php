<?php
include("classe_stock.php");
  $array=$_GET["id"];
  foreach ($array as &$value) {
  Stock::esborrarStock($value);
  }


 ?>

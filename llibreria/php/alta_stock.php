<?php
include_once("classe_stock.php");

$exemplar = new Stock ($_GET['id']);
for ($i=0; $i < $_GET['n_exemplars'] ; $i++) {
  $result=$exemplar->inserirStock();
}
if($result) {
  header("Location: ../JavaScript/correcte.php");
}else {
  header("Location: ../JavaScript/incorrecte.php");
}
 ?>

<?php
include("../php/classe_stock.php");
$exemplar=new Stock($_GET['id']);
$count=Stock::getStock($_GET['id']);
$exemplar->esborrarStock();
$result=$count-$_GET['n_exemplars'];
for ($i=0; $i < $result ; $i++) {
  $exemplar->inserirStock();
}
 ?>

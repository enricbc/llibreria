<?php
include("classe_llibre.php");
include("classe_stock.php");
$id=$_GET['id'];
Stock::esborrarStocks($id);
$llibre=new Llibre($id);
$llibre->esborrarLlibres();

/*if()) {
  header("Location: ../JavaScript/correcte.php");
}else {
  header("Location: ../JavaScript/incorrecte.php");
}*/
 ?>

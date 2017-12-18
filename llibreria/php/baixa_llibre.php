<?php
include("classe_llibre.php");
include("classe_stock.php");
$id=$_GET['id'];
Stock::esborrarStocks($id);
$llibre=new Llibre($id);

if($llibre->esborrarLlibres()) {
  header("Location: ../JavaScript/correcte.php");
}else {
  header("Location: ../JavaScript/incorrecte.php");
}
 ?>

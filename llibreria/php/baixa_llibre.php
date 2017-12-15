<?php
include("classe_llibre.php");
include("classe_stock.php");
$id=$_GET['id'];
Stock::esborrarStocks($id);
$llibre=new Llibre($id);
$llibre->esborrarLlibres();
 ?>

<?php
include_once("classe_genere.php");
$genere = new genere($_GET['nom']);
if ($genere->inserirGenere()) {
  header("Location: ../JavaScript/correcte.php");
}else {
  header("Location: ../JavaScript/incorrecte.php");
}
 ?>

<?php
include_once("classe_prestec.php");
$result=prestec::getPrestec();

$prestec = new prestec ($_GET['llibres_associats'],$_GET['id_usuari'],$_GET['data_sortida'],$_GET['dat_max_devolucio'],$_GET['data_rel_dev']);

if ($prestec->inserirPrestec()) {
  header("Location: ../JavaScript/correcte.php");
}else {

}

 ?>





<?php
include_once("classe_autor.php");
$result=autor::getAutors();
if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
  while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    if ($row['nom']==$_GET['nom'] && $row['cognom']==$_GET['cognom']) {
      header("Location: ../JavaScript/incorrecte.php");
      die();
    }
  }
}

$autor=new autor($_GET['nom'],$_GET['cognom'],$_GET['pais']);

if ($autor->inserirAutor()) {
  header("Location: ../JavaScript/correcte.php");
}else {
  header("Location: ../JavaScript/incorrecte.php");
}

 ?>

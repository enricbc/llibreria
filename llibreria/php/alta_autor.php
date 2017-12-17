<?php
include_once("classe_autor.php");
$result=autor::getAutors();
if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
  while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    if ($row['nom']==$_GET['nom'] && $row['cognom']==$_GET['cognom']) {
        die("Autor existent a la BD");
    }
  }
}

$autor=new autor($_GET['nom'],$_GET['cognom'],$_GET['pais']);

$autor->inserirAutor();
 ?>

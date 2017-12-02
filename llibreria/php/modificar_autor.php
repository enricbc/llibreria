<?php
include_once("classe_autor.php");
$result=autor::getAutor($_GET['id']);
$row = $result->fetch_array();

$autor=new autor($row[3],$row[0],$row[1],$row[2]);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET" action="../php/modificar_autor1.php" >
      <p>
        Nom: <input type="text" name="nom" value="<?php echo "$row[0]"?>" autofocus required>
        <br>
        <br>
        Cognom: <input type="text" name="cognom" value="<?php echo "$row[1]"?>" autofocus required>
        <br>
        <br>
        Nacio-Pais: <input type="text" name="pais" value="<?php echo "$row[2]"?>" autofocus required>
        <br>
        <br>
        <input type="hidden" name="id" value="<?php echo "$row[3]"?>">
        <button type="submit" name="modificar">Modificar</button>
      </p>
    </form>
  </body>
</html>

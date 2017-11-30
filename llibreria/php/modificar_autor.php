<?php
include_once("classe_autor.php");
if (isset($autor)) {
  $autor=new autor($_GET['id'],$_GET['nom'],$_GET['cognom'],$_GET['pais']);
  $autor->modificarAutors();
} ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET" action="modificar_autor.php">
      <p>
        Nom: <input type="text" name="nom" autofocus required>
        <br>
        <br>
        Cognom: <input type="text" name="cognom" autofocus required>
        <br>
        <br>
        Nacio-Pais: <input type="text" name="pais" autofocus required>
        <br>
        <br>
        <input type="hidden" name="id" value="<?php $_GET['autor'] ?>">
        <button type="submit" name="modificar">Modificar</button>
      </p>
    </form>
  </body>
</html>

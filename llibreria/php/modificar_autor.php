<?php
include_once("classe_autor.php");
$result=autor::getAutor($_GET['id']);
$row = $result->fetch_array();

$autor=new autor($row[3],$row[0],$row[1],$row[2]);
?>

<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Modificar autor</h1>
      </div>
    <div class="form-group container ">
      <form method="GET" action="../php/modificar_autor1.php" >
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Nom</label>
          <div class="col-sm-10">
            <input type="text" name="nom" value="<?php echo "$row[0]"?>" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Cognom</label>
          <div class="col-sm-10">
            <input type="text" name="cognom" value="<?php echo "$row[1]"?>" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Pais-Nacio</label>
          <div class="col-sm-10">
            <input type="text" name="pais" value="<?php echo "$row[2]"?>" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
          <input type="hidden" name="id" value="<?php echo "$row[3]"?>">
          <button type="submit" class="btn btn-info">Modificar</button>
        </p>
      </form>
    </div>
  </body>

</html>

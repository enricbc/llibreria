<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Donar d'alta autor</h1>
      </div>
    <div class="form-group container " >
      <form method="GET" action="../php/alta_autor.php" >
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Nom</label>
          <div class="col-sm-10">
            <input type="text" name="nom" value="Nom" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Cognom</label>
          <div class="col-sm-10">
            <input type="text" name="cognom" value="Cognom" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Pais-Nacio</label>
          <div class="col-sm-10">
            <input type="text" name="pais" value="Pais"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
          <button type="submit" class="btn btn-info">Inserir</button>
        </p>
      </form>
    </div>
  </body>

</html>

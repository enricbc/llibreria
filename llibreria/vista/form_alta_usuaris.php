<!doctype html>
<html lang="es">
<?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="form-group container py-5">
      <form method="GET" action="../php/alta_usuari.php" >
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Nom</label>
          <div class="col-sm-10">
            <input type="text" name="nom" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!----->
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">DNI</label>
          <div class="col-sm-10">
            <input type="text" name="dni" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Adreça</label>
          <div class="col-sm-10">
            <input type="text" name="adreca" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Població</label>
          <div class="col-sm-10">
            <input type="text" name="poblacio" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------->
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Provincia</label>
          <div class="col-sm-10">
            <input type="text" name="provincia" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------->
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Nacionalitat</label>
          <div class="col-sm-10">
            <input type="text" name="nacio_pais" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!-------->
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Naixement</label>
          <div class="col-sm-10">
            <input type="date" name="data_naixement" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Telefon</label>
          <div class="col-sm-10">
            <input type="number" name="telefon" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!------>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Cognom</label>
          <div class="col-sm-10">
            <input type="text" name="cognom" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <!----->
          <button type="submit" class="btn btn-info">Inserir</button>
        <!--</p>-->
      </form>
    </div>
  </body>

</html>

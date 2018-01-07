<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Donar d'alta llibre</h1>
      </div>
    <div class="form-group container ">
      <form method="GET" action="../php/alta_llibre.php" >
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Titol</label>
          <div class="col-sm-10">
            <input type="text" name="titol" value=" " class="form-control col-sm-4" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Autor</label>
          <div class="col-sm-10">
            <select name="autor" class="col-sm-4 form-control " autofocus required>
              <option value=" " disabled selected></option>
              <?php
                include_once("../php/classe_autor.php");
                $result=autor::getAutors();
                if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                  while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                    echo "<option  value=".$row[3].">";
                    echo $row[0]." ".$row[1];
                    echo "</option>";
                  }
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Numero Edició</label>
          <div class="col-sm-10">
            <input type="text" name="nedicio" value=" " class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Lloc de publicació</label>
          <div class="col-sm-10">
            <input type="text" name="llpubli" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Any de publicació</label>
          <div class="col-sm-10">
            <input type="date" name="any" class="col-sm-4 form-control" >
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Editorial</label>
          <div class="col-sm-10">
            <input type="text" name="editorial" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">ISBN</label>
          <div class="col-sm-10">
            <input type="text" name="isbn" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Genere</label>
          <div class="col-sm-10">
            <select name="genere[]" class="col-sm-4 form-control " multiple autofocus required>
              <option value=" " disabled selected></option>
              <?php
                include("../php/classe_genere.php");
                $result=Genere::getGenere();
                if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                  while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                    echo "<option  value=".$row[0].">";
                    echo $row[1];
                    echo "</option>";
                  }
                }
               ?>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-info">Inserir</button>
      </form>
    </div>
  </body>
</html>

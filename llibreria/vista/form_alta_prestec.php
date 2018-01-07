<!doctype html>
<html lang="es">
  <head>
    <title>Llibreira</title>
  <?php include("../php/navbar.php") ?>

  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Donar d'alta prestec</h1>
      </div>
    <div class="form-group container ">
      <form method="GET" action="../php/alta_prestec.php" >
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Llibres associats</label>
          <div class="col-sm-10">
            <select name="llibres_associats" class="col-sm-4 form-control " autofocus required>
              <?php
                include("../php/classe_llibre.php");
                $result=Llibre::getLlibres();
                if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                  while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                    echo "<option  name= 'llibres_associats' value=".$row[0].">";
                    echo "Titol: ".$row[7]." Editorial: ".$row[4]." Num.Edicio: ".$row[6]." ISBN: ".$row[2];
                    echo "</option>";
                  }
                }
               ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Usuari demandant</label>
          <div class="col-sm-10">
            <select name="id_usuari" class="col-sm-4 form-control " autofocus required>
              <?php
                include("../php/classe_usuari.php");
                $result=usuari::getUsuari();
                if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                  while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                    echo "<option  name= 'id_usuari' value=".$row[0].">";
                    echo "DNI: ".$row[2]." Nom: ".$row[1]." Cognom: ".$row[10]." Telefon: ".$row[9]." E-mail: ".$row[8];
                    echo "</option>";
                  }
                }
               ?>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Data sortida</label>
          <div class="col-sm-10">
            <input type="date" name="data_sortida" class="col-sm-4 form-control" >
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Data maxima devolucio</label>
          <div class="col-sm-10">
            <input type="date" name="dat_max_devolucio" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Data rel devolucio</label>
          <div class="col-sm-10">
            <input type="date" name="data_rel_dev" value=" "  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
          </div>
        </div>

		        <div class="form-group row">
          <label class="col-sm-2 col-formlabel" for="inputNom">Exemplar</label>
          <div class="col-sm-10">
            <select name="id_usuari" class="col-sm-4 form-control " autofocus required>
              <?php
                include("../php/classe_prestec.php");
                $result=prestec::getPrestec2();
                if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                  while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                    echo "<option  name= 'exemplar' value=".$row[0].">";
                    echo "Id_llibre: ".$row[1]." Estat: ".$row[2];
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

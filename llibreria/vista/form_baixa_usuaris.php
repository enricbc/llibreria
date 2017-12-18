<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="form-group container py-5">
      <form name="formulari" method="get" action="../php/baixa_usuari.php" >
        <table class="table table-striped">
          <thead style="background-color: #6AF574;">
            <tr>
              <th>id</th> <!--lloc on va el camp ID-->
              <th>Nom</th>
              <th>DNI</th>
              <th>Adreça</th>
              <th>Població</th>
              <th>Provincia</th>
              <th>Pais/Nació</th>
              <th>Data de Naixement</th>
              <th>Email</th>
              <th>Telofon</th>
              <th>Cognom</th>
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include_once("../php/clase_usuari.php");
          $result=usuari::getUsuari();
          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
              echo "<tr>";
              echo "<th><input type='radio' name='id' value=".$row[0]."></th>"; //nose kin numero de id va aqui exactament.
                for ($i=0; $i < 10; $i++) {
                  echo "<td>".$row[$i]."</td>";
                }
              echo "</tr>";
            }
          }
         ?>
       </tbody>
     </table>
     <button type="submit" class="btn btn-info">Selecció</button>
    </form>
    </div>
  </body>

</html>

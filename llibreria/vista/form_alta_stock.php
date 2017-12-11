<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Alta stock</h1>
      </div>
    <div class="form-group container ">
      <form name="formulari" method="get" action="../php/alta_stock.php" >
        <table class="table table-striped">
          <thead style="background-color: #6AF574;">
            <tr>
              <th></th>
              <th>Titol</th>
              <th>Autor</th>
              <th>ISBN</th>
              <th>Editorial</th>
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include("../php/classe_llibre.php");
          include("../php/classe_autor.php");
          $result=Llibre::getLlibres();

          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($row = $result->fetch_array(MYSQLI_ASSOC)){//Mentre que poguesim agafar elements del array
              $result1=autor::getAutor($row["id_autor"]);
              $autor = $result1->fetch_array();
              //$genere = $result2->fetch_array(MYSQLI_ASSOC);
              echo "<tr>";
              echo "<th><input type='radio' name='id' value=".$row["id"]."></th>";
                //for ($i=0; $i < 4; $i++) {
                  echo "<td>".$row["titol"]."</td>";
                  echo "<td>".$autor[0]." ".$autor[1]."</td>";
                  echo "<td>".$row["isbn"]."</td>";
                  echo "<td>".$row["editorial"]."</td>";
                //}
              echo "</tr>";
            }
          }
         ?>
       </tbody>
     </table>
     <input type="number" name="n_exemplars" value="">
     <button type="submit" class="btn btn-info">Selecció</button>
    </form>
    </div>
  </body>

</html>

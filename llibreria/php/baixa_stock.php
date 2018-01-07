<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Baixa stock</h1>
      </div>
    <div class="form-group container ">
      <form name="formulari" method="get" action="../php/baixa_stock1.php" >
        <table class="table table-striped">
          <thead style="background-color: #6AF574;">
            <tr>
              <th></th>
              <th>#</th>
              <th>Titol</th>
              <th>Autor</th>
              <th>Estat</th>
              <th>Acció</th>
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include("../php/classe_llibre.php");
          include("../php/classe_autor.php");
          include("../php/classe_stock.php");
          $result=Stock::getStocks($_GET['id']);

          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($stock = $result->fetch_array(MYSQLI_ASSOC)){//Mentre que poguesim agafar elements del array
              $result2=Llibre::getLlibre($_GET['id']);
              $row = $result2->fetch_array(MYSQLI_ASSOC);
              $result1=autor::getAutor($row["id_autor"]);
              $autor = $result1->fetch_array();
              //$genere = $result2->fetch_array(MYSQLI_ASSOC);
              echo "<tr>";
                //for ($i=0; $i < 4; $i++) {
                echo "<th><input type='checkbox' name='id[]' value=".$stock["id"]."></th>";
                echo "<td>".$stock["id"]."</td>";
                  echo "<td>".$row["titol"]."</td>";
                  echo "<td>".$autor[0]." ".$autor[1]."</td>";
                  if ($stock["estat"]==0) {
                    echo "<td bgcolor='#00FF00'>Disponible</td>";
                    echo "<td><a href='../vista/form_alta_prestec.php'>Prestar</a></td>";
                  }elseif ($stock["estat"]==1) {
                    echo "<td bgcolor='#FF0000'>Prestat</td>";
                    echo "<td><a href='../php/modificar_prestec.php'>Modificar</a><br /><a href='../vista/form_baixa_prestec.php'>Retornar</a></td>";
                  }
              echo "</tr>";
            }
          }else {
            echo "<td colspan='6' class='text-white progress-bar-striped progress-bar-animated bg-danger'><center><strong>No hi han exemplars</strong></center></td>";
          }
         ?>
       </tbody>
     </table>
     <button type="submit" class="btn btn-info">Selecció</button>
    </form>
    </div>
  </body>

</html>

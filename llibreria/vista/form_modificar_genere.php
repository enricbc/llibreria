<!doctype html>
<html lang="es">
  <?php include("../php/navbar.php") ?>
  <body style="background-color: #F5EC9A;">
    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Modificar genere</h1>
      </div>
	  
	  
    <div class="form-group container ">
      <form name="formulari" method="GET" action="../php/modificar_genere.php" >
        <table class="table table-striped ">
          <thead style="background-color: #6AF574;">
            <tr>
              <th></th>
              <th>Nom</th>
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include_once("../php/classe_genere.php");
          $result=genere::getGenere();
          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
              echo "<tr>";
              echo "<th><input type='radio' name='id' value=".$row[0]."></th>";
			  
                for ($i=1; $i < 2; $i++) {
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
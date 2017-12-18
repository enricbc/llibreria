<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>

    <div class="container mx-auto">
      <div class="row py-5">
        <h1>Donar de baixa Usuaris</h1>
      </div>
    <div class="form-group container ">
      <form name="formulari" method="get" action="../M7_2/baixa_usuari.php" >
        <table class="table table-striped">
          <thead style="background-color: #6AF574;">
            <tr>
            
              <th>ID</th>
              <th>Nom</th>
              <th>DNI</th>
              <th>Adresa</th>
              <th>Poblacio</th>
              <th>Provincia</th>
              <th>Pais/Nacio</th>
              <th>Data Naixement</th>
              <th>Email</th>
              <th>Telefon</th>
              <th>Cognom</th>            
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include_once("../M7_2/clase_usuari.php");
          $result=usuari::getUsuari();
          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
              echo "<tr>";
              echo "<th><input type='radio' name='id' value=".$row[0]."></th>";
                for ($i=0; $i < 10; $i++) {
                  echo "<td>".$row[$i+1]."</td>";
                }
              echo "</tr>";
            }
          }
         ?>
       </tbody>
     </table>
     <button type="submit" class="btn btn-info">Seleccio</button>
    </form>
    </div>
		
		
	</body>
</html>
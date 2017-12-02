<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Llibreria</title>
  </head>
  <body>
    <form name="formulari" method="get" action="../php/modificar_autor.php" >
      <?php
        include_once("../php/classe_autor.php");
        $result=autor::getAutors();
        if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
          while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
            echo "<pre>";
            echo "<input type='radio' name='id' value=".$row[3].">";
              for ($i=0; $i < 3; $i++) {
                echo $row[$i]." ";
              }
            echo "</pre>";
          }
        }
       ?>
       <input type="submit" value="Modificar">
    </form>
  </body>
</html>

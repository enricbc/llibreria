<!doctype html>
<html lang="es">
  <head>
    <title>Llibreira</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!--ESTRUCTURA NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
      <a class="navbar-brand" href="../vista/index.php">
        <img class="mx-1" src="../images/logo.png" width="30" height="30" alt="">Llibreria
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!--AUTORS-->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Autors
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../vista/form_alta_autors.php">Inserir</a>
            <a class="dropdown-item" href="../vista/form_modificar_autors.php">Modificar</a>
            <a class="dropdown-item" href="../vista/form_baixa_autors.php">Eliminar</a>
          </div>
        </li>
      </ul>
      <!--Fi AUTORS-->
      <!--INICI GENERES-->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Generes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../vista/form_alta_genere.php">Inserir</a>
            <a class="dropdown-item" href="../vista/form_modificar_genere.php">Modificar</a>
            <a class="dropdown-item" href="../vista/form_baixa_genere.php">Eliminar</a>
          </div>
        </li>
      </ul>
      <!--INICI LLIBRES-->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Llibres
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="../vista/form_alta_llibres.php">Inserir</a>
            <a class="dropdown-item" href="../vista/form_modificar_llibres.php">Modificar</a>
            <a class="dropdown-item" href="../vista/form_baixa_llibres.php">Eliminar</a>
          </div>
        </li>
      </ul>
    </div>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: #F5EC9A;">
    <div class="form-group container py-5">
      <form name="formulari" method="get" action="../php/baixa_autor.php" >
        <table class="table table-striped">
          <thead style="background-color: #6AF574;">
            <tr>
              <th></th>
              <th>Nom</th>
              <th>Cognom</th>
              <th>Pais/Nació</th>
            </tr>
          </thead>
          <tbody style="background-color: #E2F5DD;">
        <?php
          include_once("../php/classe_autor.php");
          $result=autor::getAutors();
          if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
            while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
              echo "<tr>";
              echo "<th><input type='radio' name='id' value=".$row[3]."></th>";
                for ($i=0; $i < 3; $i++) {
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

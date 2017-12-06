<?php
include_once("classe_llibre.php");
$id=$_GET['id'];
$result1=Llibre::getLlibre($_GET['id']);
$row = $result1->fetch_array(MYSQLI_ASSOC);

$llibre=new Llibre($row['id_autor'],$row['titol'],$row['num_edicio'],$row['lloc_publicacio'],$row['any_edicio'],$row['editorial'],$row['isbn'],$row['quantitat']);
 ?>
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
       <!--INICI STOCK-->
       <ul class="navbar-nav">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Stock
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="../vista/form_alta_stock.php">Inserir</a>
             <a class="dropdown-item" href="../vista/form_baixa_stock.php">Eliminar</a>
           </div>
         </li>
       </ul>
     </div>
     </nav>
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
   </head>
   <body style="background-color: #F5EC9A;">
     <div class="container mx-auto">
       <div class="row py-5">
         <h1>Modificar llibre</h1>
       </div>
     <div class="form-group container ">
       <form method="GET" action="../php/modificar_llibre1.php" >
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Titol</label>
           <div class="col-sm-10">
             <input type="text" name="titol"  value="<?php echo $row['titol']?>" class="form-control col-sm-4" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Autor</label>
           <div class="col-sm-10">
             <select name="autor" value="pene" class="col-sm-4 form-control " autofocus required>
               <?php
                 include("../php/classe_autor.php");
                 $autor=autor::getAutor($row['id_autor']);
                 $autor1 = $autor->fetch_array();
                 echo "<option  value='' disabled selected>";
                 echo $autor1[0]." ".$autor1[1];
                 echo "</option>";
                 $result=autor::getAutors();
                 if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                   while ($row1 = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                     echo "<option  value=".$row1[3].">";
                     echo $row1[0]." ".$row1[1];
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
             <input type="text" name="nedicio"  value="<?php echo $row['num_edicio']?>" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Lloc de publicació</label>
           <div class="col-sm-10">
             <input type="text" name="llpubli"  value="<?php echo $row['lloc_publicacio']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Any de publicació</label>
           <div class="col-sm-10">
             <input type="date" name="any"  value="<?php echo $row['any_edicio']?>" class="col-sm-4 form-control" >
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Editorial</label>
           <div class="col-sm-10">
             <input type="text" name="editorial"  value="<?php echo $row['editorial']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">ISBN</label>
           <div class="col-sm-10">
             <input type="text" name="isbn"  value="<?php echo $row['isbn']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Quantitat exemplars</label>
           <div class="col-sm-10">
             <input type="text" name="qexemplars"  value="<?php echo $row['quantitat']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <input type="hidden" name="id" value="<?php echo $id?>">
         <button type="submit" class="btn btn-info">Modificar</button>
       </form>
     </div>
   </body>

 </html>

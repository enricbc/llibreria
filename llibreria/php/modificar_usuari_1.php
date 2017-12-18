<?php
include_once("clase_usuari.php");
//$id=$_GET['id'];
$result=usuari::getUsuari($_GET['id']);
//$row = $result->fetch_array(MYSQLI_ASSOC);
//$usuari = new usuari($_GET['id'], $_GET['nom'],$_GET['dni'],$_GET['adreca'],$_GET['poblacio'],$_GET['provincia'],$_GET['nacio_pais'],$_GET['data_naixement'],$_GET['email'],$_GET['telefon'],$_GET['cognom']);
 //aqui a dalt (esta tot mal lo de a adalt) va lo de include once i lo deusuari=new usuari (o algo aiix).
 
//$result=usuari::getUsuaris($_GET['id']);
$row = $result->fetch_array();

$usuari=new usuari($row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9],$row[10]);
//($row[3],$row[0],$row[1],$row[2]);

 ?> 
 
 <!doctype html>
 <html lang="es">
   <head>
     <title>Llibreria</title>
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
       
        <!--INICI USUARIS-->
       <ul class="navbar-nav">
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Usuaris
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="../vista/form_alta_usuaris.php">Inserir</a>
             <a class="dropdown-item" href="../vista/form_modifica_usuaris.php">Modificar</a>
             <a class="dropdown-item" href="../vista/form_baixa_usuaris.php">Eliminar</a>
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
         <h1>Modificar Usuari</h1>
       </div>
     <div class="form-group container ">
       <form method="GET" action="../php/modificar_usuari.php" >
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Nom</label>
           <div class="col-sm-10">
             <input type="text" name="nom"  value="<?php echo $row['1']?>" class="form-control col-sm-4" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">DNI</label>
           <div class="col-sm-10">
             <input type="text" name="dni"  value="<?php echo $row['2']?>" class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Adreça</label>
           <div class="col-sm-10">
             <input type="text" name="adreca"  value="<?php echo $row['3']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Població</label>
           <div class="col-sm-10">
             <input type="text" name="poblacio"  value="<?php echo $row['4']?>" class="col-sm-4 form-control" >
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Província</label>
           <div class="col-sm-10">
             <input type="text" name="provincia"  value="<?php echo $row['5']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Nacionalitat/País</label>
           <div class="col-sm-10">
             <input type="text" name="nacio_pais"  value="<?php echo $row['6']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Data Naixement</label>
           <div class="col-sm-10">
             <input type="date" name="data_naixement"  value="<?php echo $row['7']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <!----->
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Email</label>
           <div class="col-sm-10">
             <input type="email" name="email"  value="<?php echo $row['8']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <!----->
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Telefon</label>
           <div class="col-sm-10">
             <input type="number" name="telefon"  value="<?php echo $row['9']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <!------>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Cognom</label>
           <div class="col-sm-10">
             <input type="text" name="cognom"  value="<?php echo $row['10']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <input type="hidden" name="id" value="<?php echo $row[0]?>">
         
         <!--<input type="hidden" name="id" value="<?php echo $id?>">-->
         <button type="submit" class="btn btn-info">Modificar</button>
       </form>
     </div>
   </body>

 </html>

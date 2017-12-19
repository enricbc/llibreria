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
  <?php include("../php/navbar.php") ?>
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
           <label class="col-sm-2 col-formlabel" for="inputNom">Adre�a</label>
           <div class="col-sm-10">
             <input type="text" name="adreca"  value="<?php echo $row['3']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Poblaci�</label>
           <div class="col-sm-10">
             <input type="text" name="poblacio"  value="<?php echo $row['4']?>" class="col-sm-4 form-control" >
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Prov�ncia</label>
           <div class="col-sm-10">
             <input type="text" name="provincia"  value="<?php echo $row['5']?>"  class="col-sm-4 form-control" id="formGroupExampleInput" placeholder="Example input" autofocus required>
           </div>
         </div>
         <div class="form-group row">
           <label class="col-sm-2 col-formlabel" for="inputNom">Nacionalitat/Pa�s</label>
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

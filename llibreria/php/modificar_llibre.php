<?php
include_once("classe_llibre.php");
$id=$_GET['id'];
$result1=Llibre::getLlibre($_GET['id']);
$row = $result1->fetch_array(MYSQLI_ASSOC);

$llibre=new Llibre($row['id_autor'],$row['titol'],$row['num_edicio'],$row['lloc_publicacio'],$row['any_edicio'],$row['editorial'],$row['isbn']);
 ?>
 <!doctype html>
 <html lang="es">
   <?php include("../php/navbar.php") ?>
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
           <label class="col-sm-2 col-formlabel" for="inputNom">Genere</label>
           <div class="col-sm-10">
             <select name="genere[]" class="col-sm-4 form-control " multiple autofocus required>
               <option value=" " disabled selected></option>
               <?php
                 include("../php/classe_genere.php");
                 $result=Genere::getGeneres();
                 if ($result->num_rows > 0){ //Si la consulta ens retorna alguna linia (Si en retorna ho posa en un array)
                   while ($row = $result->fetch_array()){//Mentre que poguesim agafar elements del array
                     echo "<option  value=".$row[0].">";
                     echo $row[1];
                     echo "</option>";
                   }
                 }
                ?>
             </select>
           </div>
         </div>
         <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
         <button type="submit" class="btn btn-info">Modificar</button>
       </form>
     </div>
   </body>

 </html>

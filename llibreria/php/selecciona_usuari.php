<?php
include_once('clase_usuari.php');
   
   $usuari = new usuari($_GET['nom'],$_GET['dni'],$_GET['adreca'],$_GET['poblacio'],$_GET['provincia'],$_GET['nacio_pais'],$_GET['data_naixement'],$_GET['email'],$_GET['telefon'],$_GET['cognom']);
   
   $usuari->getUsuaris($id);
   
   /*while($fila=mysqli_fetch_array()){
   	
   }*/
   

?>
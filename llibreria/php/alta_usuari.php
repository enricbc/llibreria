<?php
include_once('clase_usuari.php');
   
   $usuari = new usuari($_GET['nom'],$_GET['dni'],$_GET['adreca'],$_GET['poblacio'],$_GET['provincia'],$_GET['nacio_pais'],$_GET['data_naixement'],$_GET['email'],$_GET['telefon'],$_GET['cognom']);
   
   $usuari->inserirUsuari();
   
   
   
   
/*    $conexio=new mysqli($server, $username, $password, $database);
if($conexio->connect_errno){
    echo "Error de connexió {$conexio->connect_errno}";
}

if(isset($_POST[insertar])){
    
    $id = $_POST['id']; 
    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];
    $dni = $_POST['dni'];
    $adresa = $_POST['adresa'];
    $poblacio = $_POST['poblacio'];
    $provincia = $_POST['provincia'];
    $pais = $_POST['pais'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $naixement = $_POST['naixement'];
    
    
    $usuari1 = new usuari('$id','$nom', '$cognom', '$dni', '$adresa', '$poblacio', '$provincia', '$pais', '$email', '$telefon', '$naixement');
}*/




/*$inserir="INSERT INTO usuari (nom, cognom, dni, adresa, poblacio, provincia, pais, email, telefon, naixement) VALUES ('$nom', '$cognom', '$dni', '$adresa', '$poblacio', '$provincia', '$pais', '$email', '$telefon', '$naixement')";*/




?>
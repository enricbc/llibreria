<?php
class autor
{
  private $nom;
  private $cognom;
  private $pais;
  private $id;

  function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    /*Important que ens fixesim en el nº de parametres que passem
    per a donarli de nom al contructor __construct + el nº de parametres*/
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }
  function __construct3($nom,$cognom,$pais)
  {
    $this->nom=$nom;
    $this->cognom=$cognom;
    $this->pais=$pais;
  }
  function __construct1($id)
  {
    $this->id=$id;
  }
  function __construct4($autor,$nom,$cognom,$pais)
  {
    $this->id=$autor;
    $this->nom=$nom;
    $this->cognom=$cognom;
    $this->pais=$pais;
  }
  function inserirAutor(){
    include ("../php/conexio.php");

    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql ="INSERT INTO autor (nom, cognom, pais)
    VALUES ('$this->nom', '$this->cognom', '$this->pais')";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  static public function getAutors(){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from autor"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  static public function getAutor($id){ //Recullo la informacio d'un autor gracies a un id
    include ("../php/conexio.php");
    $conexion = new mysqli();

    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from autor where id = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function esborrarAutors(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="DELETE FROM autor where id = (".$this->id.");";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function modificarAutors(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="UPDATE autor set nom ='$this->nom', cognom ='$this->cognom', pais ='$this->pais' where id = (".$this->id.");";
    //Genero sentencia SQL
    /*VALUES ('$_GET['nom']', '$_GET['cognom']', '$_GET['pais']') */


    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

?>

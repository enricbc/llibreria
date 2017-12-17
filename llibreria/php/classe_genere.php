<?php
class autor
{
  private $nom;
  private $id;
  function __construct()
  {
    $args = func_get_args();
    $num = func_num_args();
    $f='__construct'. $num;
    if (method_exists($this,$f)) {
      call_user_func_array(array($this,$f),$args);
    }
  }
  function __construct1($nom)
  {
    $this->$nom=$nom;
  }
  function __construct0()
  {

  }
  function inserirGenere($nom){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error i paro conexio
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }


    $sql ="INSERT INTO genere (nom) VALUES ($this->nom)";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($conexion->query($sql)===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el genere correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  public static function getGeneres(){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    @$conexion->connect($server, $username, $password, $database);

    if ($conexion->connect_error){
      die('Error de conexión: ' . $conexion->connect_error);
    }
    $sql="SELECT * from genere"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat
    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  function esborrarGeneres(){
    include_once ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="DELETE FROM genere where id = (".$this->id.");";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha eliminat l'autor correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
}

?>

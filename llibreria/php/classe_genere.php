<?php
class genere
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
  function __construct2($id, $nom)
  {
  	$this->id=$id;
    $this->nom=$nom;
  }
  function __construct1($id)
  {
    $this->id=$id;
  }
  function __construct0()
  {

  }

  function inserirGenere(){
    include ("../php/conexio.php");

    @$conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="INSERT INTO genere (nom) VALUES ('$this->id')";//Genero sentencia SQL

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha inserit el genere correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    return $result;
    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

  static public function getGenere(){
    include ("../php/conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from genere"; //Importem el genere

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }
  static public function getGeneres($id){ //Recullo la informacio d'un autor gracies a un id
    include ("../php/conexio.php");
    $conexion = new mysqli();

    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }

    $sql="SELECT * from genere where id = (".$id.");"; //Importem els usuaris

    $result = $conexion->query($sql); //Utilitzem la conexio per a donar un resultat

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

  function esborrarGeneres(){
    include ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);

    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
    $sql ="DELETE FROM genere where id = (".$this->id.");";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    return $result;

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }

  function modificarGeneres(){
	include ("conexio.php");
    $conexion = new mysqli();
    $conexion=mysqli_connect($server, $username, $password, $database);
    if (!$conexion){//Comprobo que podem establir conexió sino mostro error
      die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }
     $sql ="UPDATE genere set nom ='$this->nom' where id = $this->id;";

    $result = $conexion->query($sql);//Retotno resultat de la conexio si ha funcionat o no

    if ($result===TRUE) {//Comprobem que s'ha introduit satisfactoriament
      echo "S'ha modificat el genere correctament";
    }else{
      echo "Error: ".$sql." <br />".$conexion->error;
    }

    $conexion->close();// Tanquem conexio IMPORTANTISSIM!!!
  }


}

?>
